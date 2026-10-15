<?php

namespace App\Services\Newsletter;

use App\Models\NewsletterCampaign;
use App\Models\Project;

/**
 * Składa HTML newslettera z szablonu resources/newsletter/template.html.
 */
class NewsletterRenderer
{
    // Języki pisane od prawej do lewej (spośród języków portalu)
    public const RTL_LOCALES = ['ar', 'he', 'fa', 'ps', 'dv'];

    // Stałe teksty szablonu po polsku - tłumaczone razem z treścią wysyłki
    public const FIXED_TEXTS = [
        'offers_heading' => 'Polecane oferty',
        'offer_button' => 'Zobacz',
        'footer_reason' => 'Otrzymujesz tę wiadomość, ponieważ zapisałeś się na newsletter w serwisie Work4you.global.',
        'unsubscribe_text' => 'Wypisz się',
    ];

    /**
     * Teksty wysyłki do przetłumaczenia (polski oryginał).
     *
     * @return array<string, string>
     */
    public function sourceTexts(NewsletterCampaign $campaign): array
    {
        $texts = array_filter([
            'subject' => $campaign->subject,
            'preheader' => $campaign->preheader,
            'title' => $campaign->title,
            'intro' => $campaign->intro,
            'content' => $campaign->content,
            'cta_text' => $campaign->cta_text,
        ], fn ($value) => filled($value));

        return $texts + self::FIXED_TEXTS;
    }

    /**
     * @param  array<string, string>  $texts  przetłumaczone teksty (klucze jak w sourceTexts)
     */
    public function render(NewsletterCampaign $campaign, string $locale, array $texts): string
    {
        $html = file_get_contents(resource_path('newsletter/template.html'));
        $rtl = in_array($locale, self::RTL_LOCALES, true);

        $html = $this->renderOffers($html, $campaign->offer_ids ?? [], $locale, $texts['offer_button'] ?? self::FIXED_TEXTS['offer_button']);
        $html = $this->renderCta($html, $texts['cta_text'] ?? null, $campaign->cta_url);

        $values = [
            'lang' => e($locale),
            'dir' => $rtl ? 'rtl' : 'ltr',
            'align' => $rtl ? 'right' : 'left',
            'subject' => e($texts['subject'] ?? ''),
            'preheader' => e($texts['preheader'] ?? ''),
            'title' => e($texts['title'] ?? ''),
            'intro' => e($texts['intro'] ?? ''),
            // Treść pochodzi z edytora w panelu admina - to HTML, nie jest escapowana
            'content' => $texts['content'] ?? '',
            'offers_heading' => e($texts['offers_heading'] ?? self::FIXED_TEXTS['offers_heading']),
            'footer_reason' => e($texts['footer_reason'] ?? self::FIXED_TEXTS['footer_reason']),
            'unsubscribe_text' => e($texts['unsubscribe_text'] ?? self::FIXED_TEXTS['unsubscribe_text']),
        ];

        // Najpierw usuwamy komentarz z opisem znaczników, żeby nie trafił do maila
        $html = preg_replace('/<!--\s*Szablon newslettera.*?-->\s*/s', '', $html, 1);

        return str_replace(
            array_map(fn ($key) => '{{'.$key.'}}', array_keys($values)),
            array_values($values),
            $html
        );
    }

    /**
     * Dane karty oferty w danym języku: stanowisko, miejsce, wynagrodzenie, link.
     *
     * @return array{title: string, location: string, salary: string, url: string}
     */
    public function offerData(Project $project, string $locale): array
    {
        $position = $project->position ?: $project->profession;
        $title = $position['allTranslations']['title'][$locale]
            ?? $position['allTranslations']['title']['pl']
            ?? $position['name']
            ?? ($project->title[$locale] ?? $project->title['pl'] ?? '');

        $country = $project->countryWork['allTranslations'][$locale] ?? $project->countryWork['name'] ?? '';
        $location = implode(', ', array_filter([$project->cityWork, $country]));

        $amount = $this->formatAmount($project->basicSalaryFrom);
        if ($project->basicSalaryTo && (float) $project->basicSalaryTo > (float) $project->basicSalaryFrom) {
            $amount .= '–'.$this->formatAmount($project->basicSalaryTo);
        }
        $salaryType = $project->salary_type ? __('translate.'.$project->salary_type, [], $locale) : '';
        $salary = trim($amount.' '.($project->currency['name'] ?? '').' '.$salaryType);

        return [
            'title' => (string) $title,
            'location' => $location,
            'salary' => $salary,
            'url' => route('front.projects.single', $project),
        ];
    }

    protected function renderOffers(string $html, array $offerIds, string $locale, string $buttonText): string
    {
        $projects = $offerIds
            ? Project::active()->whereIn('id', $offerIds)->get()->sortBy(fn ($p) => array_search($p->id, $offerIds))
            : collect();

        if ($projects->isEmpty()) {
            return preg_replace('/<!-- OFFERS:START.*?<!-- OFFERS:END -->\s*/s', '', $html);
        }

        preg_match('/<!-- OFFER:START.*?-->(.*?)<!-- OFFER:END -->/s', $html, $match);
        $block = $match[1];

        $items = $projects->map(function (Project $project) use ($block, $locale, $buttonText) {
            $offer = $this->offerData($project, $locale);

            return str_replace(
                ['{{offer_title}}', '{{offer_location}}', '{{offer_salary}}', '{{offer_url}}', '{{offer_button}}'],
                [e($offer['title']), e($offer['location']), e($offer['salary']), e($offer['url']), e($buttonText)],
                $block
            );
        })->implode('');

        return preg_replace('/<!-- OFFER:START.*?<!-- OFFER:END -->/s', str_replace(['\\', '$'], ['\\\\', '\\$'], $items), $html);
    }

    protected function renderCta(string $html, ?string $text, ?string $url): string
    {
        // Bez tekstu lub adresu przycisk znika z maila
        if (blank($text) || blank($url)) {
            return preg_replace('/\s*<!-- Główny przycisk -->.*?<\/tr>\s*(?=\s*<!-- OFFERS:START|\s*<!-- Stopka)/s', "\n", $html);
        }

        return str_replace(['{{cta_text}}', '{{cta_url}}'], [e($text), e($url)], $html);
    }

    protected function formatAmount($value): string
    {
        $number = (float) $value;

        return number_format($number, fmod($number, 1.0) ? 2 : 0, ',', ' ');
    }
}

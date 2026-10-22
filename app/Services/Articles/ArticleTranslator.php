<?php

namespace App\Services\Articles;

use App\Lang\Lang;
use OpenAI\Laravel\Facades\OpenAI;
use RuntimeException;

/**
 * Tłumaczy artykuł z polskiego na język rynku (OpenAI). Meta title, description i frazy są dopasowywane
 * do wyszukiwań w danym języku. Języki o rzadkich alfabetach (długi tekst wyjściowy) tłumaczymy po sekcjach,
 * żeby pojedyncza odpowiedź mieściła się w czasie.
 */
class ArticleTranslator
{
    // Teksty artykułu tłumaczone razem z treścią
    public const FIELDS = ['title', 'short_description', 'meta_title', 'meta_description', 'meta_keywords', 'alt'];

    // Pismo zajmuje kilka razy więcej tokenów niż polski - treść po sekcjach (<h2>)
    public const SECTIONED_LOCALES = ['am', 'bn', 'dv', 'dz', 'hi', 'hy', 'ka', 'km', 'lo', 'my', 'ne', 'si', 'th'];

    // Cena modelu w USD za 1 mln tokenów (wejście / wyjście)
    public const PRICE_INPUT = 2.0;

    public const PRICE_OUTPUT = 10.0;

    private int $promptTokens = 0;

    private int $completionTokens = 0;

    /**
     * @param  array<string, string|null>  $article  pola artykułu po polsku (FIELDS + content)
     * @return array{texts: array<string, string>, prompt_tokens: int, completion_tokens: int, cost_usd: float}
     */
    public function translate(array $article, string $locale): array
    {
        $this->promptTokens = 0;
        $this->completionTokens = 0;

        $fields = array_filter(array_intersect_key($article, array_flip(self::FIELDS)), fn ($value) => filled($value));
        $content = (string) ($article['content'] ?? '');

        if (in_array($locale, self::SECTIONED_LOCALES, true)) {
            $texts = $this->request($fields, $locale);
            $texts['content'] = collect($this->sections($content))
                ->map(fn (string $section) => $this->request(['content' => $section], $locale)['content'])
                ->implode('');
        } else {
            $texts = $this->request($fields + ['content' => $content], $locale);
        }

        return [
            'texts' => $texts,
            'prompt_tokens' => $this->promptTokens,
            'completion_tokens' => $this->completionTokens,
            'cost_usd' => round($this->promptTokens * self::PRICE_INPUT / 1e6 + $this->completionTokens * self::PRICE_OUTPUT / 1e6, 4),
        ];
    }

    /**
     * Treść HTML podzielona przed każdym nagłówkiem <h2> (sekcja = nagłówek z akapitami).
     *
     * @return array<int, string>
     */
    public function sections(string $html): array
    {
        $parts = preg_split('/(?=<h2[\s>])/i', $html, -1, PREG_SPLIT_NO_EMPTY) ?: [];

        return array_values(array_filter($parts, fn ($part) => trim(strip_tags($part)) !== ''));
    }

    /**
     * @param  array<string, string>  $texts
     * @return array<string, string>
     */
    private function request(array $texts, string $locale): array
    {
        if ($texts === []) {
            return [];
        }

        $language = $this->languageName($locale);

        $response = OpenAI::chat()->create([
            'model' => config('services.newsletter.translation_model'),
            'response_format' => ['type' => 'json_object'],
            'max_completion_tokens' => 32000,
            'messages' => [
                ['role' => 'system', 'content' => "You are a professional translator for a job portal (Work4you.global). Translate the article from Polish into {$language} (language code {$locale}). Return a JSON object with exactly the same keys. Keep all HTML tags and structure unchanged, translate only the text. Keep the brand WORK4YOU.GLOBAL unchanged. Write natural, fluent text for job seekers; adapt meta_title (max 60 characters), meta_description (max 160 characters) and meta_keywords to phrases people search for in {$language}."],
                ['role' => 'user', 'content' => json_encode($texts, JSON_UNESCAPED_UNICODE)],
            ],
        ]);

        $this->promptTokens += (int) ($response->usage?->promptTokens ?? 0);
        $this->completionTokens += (int) ($response->usage?->completionTokens ?? 0);

        $translated = json_decode($response->choices[0]->message->content ?? '', true);
        $missing = array_diff(array_keys($texts), array_keys(is_array($translated) ? $translated : []));

        if ($missing) {
            throw new RuntimeException("Tłumaczenie na {$locale}: brak pól ".implode(', ', $missing).'.');
        }

        return array_map('strval', array_intersect_key($translated, $texts));
    }

    /**
     * Angielska nazwa języka dla modelu (np. "Czech"), z enumu języków portalu.
     */
    private function languageName(string $locale): string
    {
        $lang = Lang::tryFrom($locale);
        if (! $lang) {
            return $locale;
        }

        $previous = app()->getLocale();
        app()->setLocale('en');
        $name = $lang->label();
        app()->setLocale($previous);

        return $name;
    }
}

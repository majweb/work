<?php

namespace App\Services\Articles;

use App\Jobs\TranslateArticle;
use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Country;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Tłumaczenie artykułów admina na rynki: wybrane kraje grupujemy według języka, tłumaczymy raz na język
 * i tworzymy jedną wersję (szkic) przypisaną do wszystkich wybranych krajów tego języka.
 */
class ArticleTranslationService
{
    // Język oryginałów pisanych w panelu admina
    public const SOURCE_LOCALE = 'pl';

    /**
     * Język rynku: pierwszy język kraju z tabeli krajów (Cypr ma dwa - bierzemy pierwszy).
     */
    public function localeForCountry(string $countryCode): ?string
    {
        return Country::languageMap()[strtolower($countryCode)][0] ?? null;
    }

    /**
     * Wybrane kraje według języka (bez rynku głównego oryginału). Kraje języka oryginału
     * są w grupie jego języka - oryginał trafia do nich bez tłumaczenia.
     *
     * @param  array<int, string>  $countryCodes
     * @return Collection<string, array<int, string>>
     */
    public function groupByLocale(Article $source, array $countryCodes): Collection
    {
        return collect($countryCodes)
            ->map(fn ($code) => strtolower($code))
            ->unique()
            ->reject(fn ($code) => $code === strtolower((string) $source->country_code))
            ->groupBy(fn ($code) => $this->localeForCountry($code))
            ->reject(fn ($codes, $locale) => $locale === '')
            ->map(fn ($codes) => $codes->values()->all());
    }

    /**
     * Dodaje rynki do tłumaczenia artykułu. Nowe języki są tłumaczone w tle; w językach już
     * przetłumaczonych nowe kraje są tylko dopisywane do istniejącej wersji (bez kosztu).
     *
     * @param  array<int, string>  $countryCodes
     * @return array{languages: int, queued: int}
     */
    public function addMarkets(Article $source, array $countryCodes): array
    {
        abort_if($source->isVersion(), 422, 'Tłumaczymy tylko oryginał artykułu.');

        $source->update(['locale' => $source->locale ?: self::SOURCE_LOCALE]);
        $groups = $this->groupByLocale($source, $countryCodes);
        $queued = 0;

        // Kraje języka oryginału (np. Polska, gdy rynkiem głównym jest inny kraj) - oryginał bez tłumaczenia
        if ($sameLanguage = $groups->pull($source->locale)) {
            $source->update(['countries' => array_values(array_unique(array_merge(
                $source->countries ?: [strtolower((string) $source->country_code)],
                $sameLanguage,
            )))]);
        }

        foreach ($groups as $locale => $codes) {
            $translation = ArticleTranslation::firstOrNew(['source_article_id' => $source->id, 'locale' => $locale]);
            $translation->countries = array_values(array_unique(array_merge($translation->countries ?? [], $codes)));

            if ($translation->exists && $translation->status === ArticleTranslation::STATUS_DONE && $translation->article) {
                $translation->save();
                $this->syncMarkets($translation->article, $translation->countries);

                continue;
            }

            // W trakcie tłumaczenia nowe kraje trafią do wersji po jego zakończeniu
            if ($translation->exists && in_array($translation->status, [ArticleTranslation::STATUS_PENDING, ArticleTranslation::STATUS_TRANSLATING], true)) {
                $translation->save();

                continue;
            }

            $translation->fill(['status' => ArticleTranslation::STATUS_PENDING, 'error' => null])->save();
            TranslateArticle::dispatch($translation);
            $queued++;
        }

        return ['languages' => $groups->count(), 'queued' => $queued];
    }

    /**
     * Ponowne tłumaczenie (np. po zmianie oryginału). Wersje poprawione ręcznie tylko na wyraźne życzenie.
     *
     * @param  array<int, string>|null  $locales  null - wszystkie języki
     */
    public function retranslate(Article $source, ?array $locales = null, bool $includeEdited = false): int
    {
        $count = 0;

        foreach ($source->translations as $translation) {
            if (($locales !== null && ! in_array($translation->locale, $locales, true))
                || ($translation->edited_manually && ! $includeEdited)
                || $translation->status === ArticleTranslation::STATUS_TRANSLATING) {
                continue;
            }

            $translation->update(['status' => ArticleTranslation::STATUS_PENDING, 'error' => null]);
            TranslateArticle::dispatch($translation);
            $count++;
        }

        return $count;
    }

    /**
     * Zapisuje wynik tłumaczenia jako wersję (szkic) przypisaną do rynków tego języka.
     *
     * @param  array{texts: array<string, string>, prompt_tokens: int, completion_tokens: int, cost_usd: float}  $result
     */
    public function saveVersion(ArticleTranslation $translation, array $result): Article
    {
        return DB::transaction(function () use ($translation, $result) {
            $translation->refresh();
            $source = $translation->source;
            $texts = $result['texts'];
            $version = $translation->article ?? new Article;

            $version->fill([
                'user_id' => $source->user_id,
                'source_article_id' => $source->id,
                'locale' => $translation->locale,
                'title' => $texts['title'] ?? $source->title,
                'content' => $texts['content'] ?? $source->content,
                'short_description' => $texts['short_description'] ?? $source->short_description,
                'meta_title' => $texts['meta_title'] ?? $source->meta_title,
                'meta_description' => $texts['meta_description'] ?? $source->meta_description,
                'meta_keywords' => $texts['meta_keywords'] ?? $source->meta_keywords,
                'alt' => $texts['alt'] ?? $source->alt,
                'category' => $source->category,
                'country_code' => $translation->countries[0] ?? $source->country_code,
                'countries' => $translation->countries,
                // Nowa wersja jest szkicem - publikuje ją admin; ponowne tłumaczenie nie zmienia publikacji
                'active' => $version->exists ? $version->active : false,
                'active_admin' => true,
            ]);
            $version->save();

            $translation->update([
                'article_id' => $version->id,
                'status' => ArticleTranslation::STATUS_DONE,
                'error' => null,
                'edited_manually' => false,
                'prompt_tokens' => $translation->prompt_tokens + $result['prompt_tokens'],
                'completion_tokens' => $translation->completion_tokens + $result['completion_tokens'],
                'cost_usd' => $translation->cost_usd + $result['cost_usd'],
            ]);

            return $version;
        });
    }

    /**
     * Kraje, w których wersja jest widoczna: pierwszy jest rynkiem głównym, wszystkie w kolumnie countries.
     *
     * @param  array<int, string>  $countryCodes
     */
    public function syncMarkets(Article $version, array $countryCodes): void
    {
        $version->update([
            'country_code' => $countryCodes[0] ?? $version->country_code,
            'countries' => array_values($countryCodes),
        ]);
    }

    /**
     * Usuwa rynek z wersji. Wersja bez rynków jest usuwana razem z tłumaczeniem.
     */
    public function removeMarket(ArticleTranslation $translation, string $countryCode): void
    {
        $countries = array_values(array_diff($translation->countries ?? [], [$countryCode]));

        if ($countries === []) {
            $translation->article?->delete();
            $translation->delete();

            return;
        }

        $translation->update(['countries' => $countries]);
        if ($translation->article) {
            $this->syncMarkets($translation->article, $countries);
        }
    }

    /**
     * Publikuje gotowe wersje (szkice) oryginału.
     */
    public function publishAll(Article $source): int
    {
        return Article::where('source_article_id', $source->id)
            ->whereIn('id', $source->translations()->where('status', ArticleTranslation::STATUS_DONE)->select('article_id'))
            ->where('active', false)
            ->update(['active' => true]);
    }

    /**
     * Szacunek kosztu tłumaczenia (średnia z testu: ~0,032 USD na język za artykuł ~1000 słów).
     */
    public function estimateCost(Article $source, int $languages): float
    {
        $words = str_word_count(strip_tags((string) $source->content));

        return round($languages * 0.032 * max($words, 300) / 1000, 2);
    }
}

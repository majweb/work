<?php

namespace App\Services;

use App\Models\ForbiddenWord;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * Wyszukuje zakazane słowa (lista w panelu admina) w treści wiadomości.
 *
 * Tekst i słowa porównujemy po sprowadzeniu do małych liter bez polskich znaków
 * ("jebać" = "jebac"), z cyframi i znakami zamiast liter ("ch0j", "k@rwa") i z
 * powtórzonymi literami ("kuuurwa"). W słowach od 4 liter łapiemy też rozdzielanie
 * kropkami i spacjami ("k.u.r.w.a", "k u r w a"). Słowo musi zaczynać się na granicy
 * wyrazu, a bez "*" także się na niej kończyć - dzięki temu "rekrutacja" czy
 * "Podlaskie" nie są blokowane.
 */
class ForbiddenWordFilter
{
    private const CACHE_KEY = 'forbidden_words.patterns.v1';

    /** Cyfry i znaki często wstawiane zamiast liter. */
    private const LOOKALIKES = [
        '0' => 'o', '1' => 'i', '3' => 'e', '4' => 'a', '5' => 's', '7' => 't',
        // Bez "!" - zwykły wykrzyknik po słowie ("shit!") nie może zmieniać go w inne słowo.
        '@' => 'a', '$' => 's',
    ];

    /** Najwyżej tyle znaków niebędących literą między literami słowa ("k.u.r.w.a"). */
    private const MAX_GAP = 2;

    public static function forget(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Pierwsze zakazane słowo znalezione w tekście (tak jak wpisane w panelu) albo null.
     */
    public function firstMatch(string $text): ?string
    {
        $haystack = self::normalizeText($text);

        if (trim($haystack) === '') {
            return null;
        }

        foreach ($this->patterns() as [$word, $pattern]) {
            if (preg_match($pattern, $haystack) === 1) {
                return $word;
            }
        }

        return null;
    }

    public function contains(string $text): bool
    {
        return $this->firstMatch($text) !== null;
    }

    /**
     * Wszystkie zakazane słowa znalezione w tekście - do podglądu w panelu admina.
     *
     * @return array<int, string>
     */
    public function allMatches(string $text): array
    {
        $haystack = self::normalizeText($text);

        return collect($this->patterns())
            ->filter(fn (array $entry) => preg_match($entry[1], $haystack) === 1)
            ->map(fn (array $entry) => $entry[0])
            ->values()
            ->all();
    }

    /**
     * Wzorzec dla jednego wpisu z panelu ("kurw*", "zabij się").
     */
    public static function patternFor(string $word): ?string
    {
        $isStem = str_ends_with(trim($word), '*');
        $tokens = preg_split('/\s+/', trim(self::normalizeWord(rtrim(trim($word), '*'))), -1, PREG_SPLIT_NO_EMPTY);

        if ($tokens === [] || $tokens === false) {
            return null;
        }

        $parts = array_map(function (string $token): string {
            $letters = array_map(fn (string $char) => preg_quote($char, '/').'+', str_split($token));
            // Krótkich słów ("kys", "huj") nie łączymy przez przerwy - za dużo fałszywych trafień.
            $gap = strlen($token) >= 4 ? '[^a-z]{0,'.self::MAX_GAP.'}' : '';

            return implode($gap, $letters);
        }, $tokens);

        return '/(?<![a-z])'.implode('[^a-z]+', $parts).($isStem ? '' : '(?![a-z])').'/';
    }

    /**
     * Tekst wiadomości: małe litery, bez polskich znaków, cyfry/znaki zamienione na litery.
     */
    public static function normalizeText(string $text): string
    {
        return strtr(Str::ascii(mb_strtolower($text)), self::LOOKALIKES);
    }

    /**
     * Wpis z panelu: małe litery i bez polskich znaków (bez zamiany cyfr - to robi tekst).
     */
    public static function normalizeWord(string $word): string
    {
        return (string) preg_replace('/[^a-z\s]/', '', Str::ascii(mb_strtolower($word)));
    }

    /**
     * @return array<int, array{0: string, 1: string}>
     */
    private function patterns(): array
    {
        return Cache::rememberForever(self::CACHE_KEY, function () {
            if (! Schema::hasTable('forbidden_words')) {
                return [];
            }

            return ForbiddenWord::query()
                ->where('is_active', true)
                ->orderBy('word')
                ->pluck('word')
                ->map(fn (string $word) => [$word, self::patternFor($word)])
                ->filter(fn (array $entry) => $entry[1] !== null)
                ->values()
                ->all();
        });
    }
}

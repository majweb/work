<?php

namespace App\Services;

use App\Models\Country;
use Illuminate\Http\Request;

/**
 * Rynek (kod kraju z tabeli countries) wykryty z języka przeglądarki przy pierwszej wizycie.
 *
 * Kod języka to nie kod kraju (ar = arabski, ale też Argentyna; sr = serbski, ale też Surinam),
 * dlatego najpierw bierzemy region z nagłówka (ar-SA -> sa), a dopiero potem kraj danego języka.
 */
class BrowserMarketDetector
{
    // Domyślny kraj dla języka używanego w kilku krajach albo takiego, którego kod jest kodem innego kraju
    public const PREFERRED_COUNTRY = [
        'en' => 'gb',
        'ar' => 'sa',
        'es' => 'es',
        'pt' => 'pt',
        'fr' => 'fr',
        'de' => 'de',
        'nl' => 'nl',
        'it' => 'it',
        'ru' => 'ru',
        'el' => 'gr',
        'tr' => 'tr',
        'sr' => 'rs',
        'zh' => 'cn',
        'ms' => 'my',
        'ko' => 'kr',
        'sv' => 'se',
        'ro' => 'ro',
        'sq' => 'al',
    ];

    public const DEFAULT_COUNTRY = 'pl';

    public function detect(Request $request): string
    {
        $countries = Country::languageMap();

        foreach ($request->getLanguages() as $tag) {
            $parts = explode('_', strtolower($tag));
            $language = $parts[0];
            $region = count($parts) > 1 && strlen(end($parts)) === 2 ? end($parts) : null;

            if ($region && isset($countries[$region])) {
                return $region;
            }

            if ($country = $this->countryForLanguage($language, $countries)) {
                return $country;
            }
        }

        return self::DEFAULT_COUNTRY;
    }

    /**
     * Główny kraj języka, np. pl -> pl, de -> de, en -> gb, ar -> sa. Null, gdy żaden kraj nim nie mówi.
     *
     * @param  array<string, string[]>|null  $countries  kod kraju => języki (domyślnie z tabeli countries)
     */
    public function countryForLanguage(string $language, ?array $countries = null): ?string
    {
        $countries ??= Country::languageMap();

        $preferred = self::PREFERRED_COUNTRY[$language] ?? null;
        if ($preferred && isset($countries[$preferred])) {
            return $preferred;
        }

        $matching = array_keys(array_filter($countries, fn (array $languages) => in_array($language, $languages, true)));

        // Kraj o tym samym kodzie co język, jeśli mówi się w nim tym językiem (pl, it, hu...)
        if (in_array($language, $matching, true)) {
            return $language;
        }

        sort($matching);

        return $matching[0] ?? null;
    }
}

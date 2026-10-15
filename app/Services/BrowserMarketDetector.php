<?php

namespace App\Services;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        $countries = $this->countryLanguages();

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
     * @param  array<string, string[]>  $countries  kod kraju => języki
     */
    protected function countryForLanguage(string $language, array $countries): ?string
    {
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

    /**
     * @return array<string, string[]> kod kraju => języki (kraj może mieć kilka, np. cy: el, tr)
     */
    protected function countryLanguages(): array
    {
        return Cache::remember('browser_market_country_languages', now()->addHour(), fn () => Country::query()
            ->get(['countryCode', 'lang'])
            ->mapWithKeys(function (Country $country) {
                $lang = $country->lang;
                $languages = is_string($lang) && str_starts_with(trim($lang), '[')
                    ? (array) json_decode($lang, true)
                    : [$lang];

                return [strtolower($country->countryCode) => array_map('strtolower', array_filter($languages))];
            })
            ->all());
    }
}

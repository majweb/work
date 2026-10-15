<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'email',
        'country_code',
        'locale',
        'consents',
        'ip_address',
        'getresponse_synced_at',
    ];

    protected $casts = [
        'consents' => 'array',
        'getresponse_synced_at' => 'datetime',
    ];

    /**
     * Język newslettera dla osoby zapisanej przed zapamiętywaniem języka strony:
     * język kraju z tabeli countries (np. cz -> cs, at -> de), a gdy go nie ma - angielski.
     */
    public static function localeForCountryCode(?string $countryCode): string
    {
        $available = config('langsShorts', []);
        $code = strtolower((string) $countryCode);

        $lang = Country::where('countryCode', $code)->value('lang');
        if (is_string($lang) && str_starts_with(trim($lang), '[')) {
            // Kraje wielojęzyczne mają listę języków, np. ["el","tr"] - bierzemy pierwszy
            $lang = json_decode($lang, true)[0] ?? null;
        }

        foreach ([$lang, $code] as $candidate) {
            if ($candidate && in_array($candidate, $available, true)) {
                return $candidate;
            }
        }

        return 'en';
    }
}

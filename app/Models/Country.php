<?php

namespace App\Models;

use Detection\MobileDetect;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Country extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $fillable = [
        'continent',
        'name',
        'countryCode',
        'lang',
        'default_image',
    ];

    public array $translatable = ['name', 'continent'];

    protected $casts = [
        'name' => 'array',
        'continent' => 'array',
    ];

    public static function getRandomImageFromBrowserLocale()
    {
        $detect = new MobileDetect;

        // Sprawdzenie, czy użytkownik jest na urządzeniu mobilnym
        $isMobile = $detect->isMobile();
        $isTablet = $detect->isTablet();

        $locale = getSelectedCountry() ?: getLocalBrowserLang(); // kod rynku, np. 'pl', 'cz', 'de'

        // Rynek zapisuje kod kraju (countryCode), a nie języka - szukamy najpierw po kraju,
        // potem po języku (np. kod z przeglądarki), na końcu fallback na pierwszy kraj
        $country = self::where('countryCode', $locale)->first()
            ?? self::where('lang', $locale)->first()
            ?? self::first();

        if (! $country) {
            return null;
        }

        // Wybór kolekcji w zależności od urządzenia
        $collectionName = $isMobile || $isTablet ? 'countries_images_mobile' : 'countries_images_desktop';

        $media = $country->getMedia($collectionName); // kolekcja media

        if (! $media->isEmpty()) {
            return $media->random()->getUrl(); // losowy obrazek z kolekcji
        }

        return null;
    }
}

//$country->addMedia(public_path('images/polska/1.png'))->toMediaCollection('countries_images');

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;
use Detection\MobileDetect;

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
        'default_image'
    ];
    public array $translatable = ['name','continent'];

    protected $casts = [
        'name' => 'array',
        'continent' => 'array',
    ];

    public static function getRandomImageFromBrowserLocale()
    {
        $detect = new MobileDetect();

        // Sprawdzenie, czy użytkownik jest na urządzeniu mobilnym
        $isMobile = $detect->isMobile();
        $isTablet = $detect->isTablet();

        $locale = getLocalBrowserLang(); // np. 'pl', 'en'

        // Szukamy kraju po kodzie języka lub fallback na domyślny
        $country = self::where('lang', $locale)->first() ?? self::first();

        if (!$country) {
            return null;
        }

        // Wybór kolekcji w zależności od urządzenia
        $collectionName = $isMobile || $isTablet ? 'countries_images_mobile' : 'countries_images_desktop';

        $media = $country->getMedia($collectionName); // kolekcja media

        if (!$media->isEmpty()) {
            return $media->random()->getUrl(); // losowy obrazek z kolekcji
        }

        return null;
    }
}

//$country->addMedia(public_path('images/polska/1.png'))->toMediaCollection('countries_images');

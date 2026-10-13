<?php

namespace App\Services;

use App\Models\Country;

/**
 * Wgrywanie zdjęć krajów z public/images/seeds/countries/{kod}/{desktop|mobile}/{1-5}.jpg
 * do kolekcji mediów kraju. Używane przez CountryImagesSeeder i komendę countries:refresh-images.
 */
class CountryImageImporter
{
    // Folder źródłowy => kolekcja mediów
    public const COLLECTIONS = [
        'desktop' => 'countries_images_desktop',
        'mobile' => 'countries_images_mobile',
    ];

    public const MAX_IMAGES = 5;

    /**
     * Istniejące pliki źródłowe kraju dla danego folderu (desktop/mobile).
     *
     * @return string[]
     */
    public function sourceFiles(Country $country, string $folder): array
    {
        $files = [];

        for ($i = 1; $i <= self::MAX_IMAGES; $i++) {
            $file = public_path("images/seeds/countries/{$country->countryCode}/{$folder}/{$i}.jpg");

            if (file_exists($file)) {
                $files[] = $file;
            }
        }

        return $files;
    }

    /**
     * Dodaje pliki do kolekcji (pliki źródłowe zostają na miejscu). Zwraca liczbę dodanych zdjęć.
     *
     * @param  string[]  $files
     */
    public function import(Country $country, string $collection, array $files): int
    {
        foreach ($files as $file) {
            $country->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection($collection);
        }

        return count($files);
    }

    /**
     * Podmienia zdjęcia w kolekcji: najpierw wgrywa nowe, potem usuwa stare (rekordy i pliki).
     * Dzięki tej kolejności błąd w trakcie wgrywania nie zostawi kraju bez zdjęć.
     *
     * @param  string[]  $files
     * @return array{added: int, removed: int}
     */
    public function replace(Country $country, string $collection, array $files): array
    {
        $old = $country->getMedia($collection);

        $added = $this->import($country, $collection, $files);
        $old->each->delete();

        return ['added' => $added, 'removed' => $old->count()];
    }
}

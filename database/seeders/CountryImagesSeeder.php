<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Services\CountryImageImporter;
use Illuminate\Database\Seeder;

class CountryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Wgrywa od nowa zdjęcia wszystkich krajów z public/images/seeds/countries/{kod}/{desktop|mobile}/{1-5}.jpg:
     * usuwa obecne zdjęcia z kolekcji (rekordy i pliki) i dodaje te z folderów. Można uruchamiać wielokrotnie,
     * bez duplikatów. Kolekcja, dla której nie ma plików w folderze, zostaje bez zmian.
     */
    public function run(CountryImageImporter $importer): void
    {
        $countries = Country::all();

        if ($countries->isEmpty()) {
            $this->command->info('Brak krajów w bazie danych.');

            return;
        }

        $added = 0;
        $removed = 0;
        $withoutFiles = [];

        foreach ($countries as $country) {
            foreach (CountryImageImporter::COLLECTIONS as $folder => $collection) {
                $files = $importer->sourceFiles($country, $folder);

                if (! $files) {
                    $withoutFiles[] = "{$country->countryCode}/{$folder}";

                    continue;
                }

                $result = $importer->replace($country, $collection, $files);
                $added += $result['added'];
                $removed += $result['removed'];
            }
        }

        $this->command->info("✅ Dodano zdjęć: {$added}, usunięto starych: {$removed}.");

        if ($withoutFiles) {
            $this->command->warn('Bez plików w folderze (pozostawiono obecne zdjęcia): '.implode(', ', $withoutFiles));
        }
    }
}

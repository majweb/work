<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = Country::all();

        if ($countries->isEmpty()) {
            $this->command->info('Brak krajów w bazie danych.');
            return;
        }

        foreach ($countries as $country) {
            $this->command->info("Przetwarzam kraj: {$country->countryCode}");

            // Foldery desktop i mobile
            $basePath = public_path("/images/seeds/countries/{$country->countryCode}");
            $desktopPath = "{$basePath}/desktop";
            $mobilePath  = "{$basePath}/mobile";

            // Dodajemy 5 zdjęć dla desktop
            for ($i = 1; $i <= 5; $i++) {
                $file = "{$desktopPath}/{$i}.jpg";

                if (file_exists($file)) {
                    $country->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection('countries_images_desktop');
                }
            }

            // Dodajemy 5 zdjęć dla mobile
            for ($i = 1; $i <= 5; $i++) {
                $file = "{$mobilePath}/{$i}.jpg";

                if (file_exists($file)) {
                    $country->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection('countries_images_mobile');
                }
            }
        }

        $this->command->info('✅ Dodano zdjęcia do wszystkich krajów.');
    }
}

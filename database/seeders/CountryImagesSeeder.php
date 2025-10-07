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
        // Wybieramy kraj do którego dodamy media (np. Polska)
        $country = Country::where('countryCode', 'pl')->first();

        if (!$country) {
            $this->command->info('Brak kraju z językiem "pl"');
            return;
        }

        // Ścieżki do lokalnych plików (możesz je trzymać np. w public/images/seeds/)
        $desktopImages = [
            public_path('images/seeds/desktop1.jpg'),
            public_path('images/seeds/desktop2.jpg'),
            public_path('images/seeds/desktop3.jpg'),
            public_path('images/seeds/desktop4.jpg'),
            public_path('images/seeds/desktop5.jpg'),
        ];

        $mobileImages = [
            public_path('images/seeds/mobile1.jpg'),
            public_path('images/seeds/mobile2.jpg'),
            public_path('images/seeds/mobile3.jpg'),
            public_path('images/seeds/mobile4.jpg'),
            public_path('images/seeds/mobile5.jpg'),
        ];

        // Dodajemy obrazki do kolekcji desktopowej
        foreach ($desktopImages as $image) {
            if (file_exists($image)) {
                $country->addMedia($image)->toMediaCollection('countries_images_desktop');
            }
        }

        // Dodajemy obrazki do kolekcji mobile
        foreach ($mobileImages as $image) {
            if (file_exists($image)) {
                $country->addMedia($image)->toMediaCollection('countries_images_mobile');
            }
        }

        $this->command->info('Dodano 5 obrazków desktopowych i 5 mobilnych do kraju: ' . $country->lang);
    }
}

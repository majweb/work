<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountryImageFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Tworzy foldery public/images/seeds/countries/{kod}/{desktop|mobile} dla krajów z bazy
     * i wstawia zdjęcie zastępcze z Polski jako 1.jpg tylko tam, gdzie go jeszcze nie ma
     * (istniejące zdjęcia nie są nadpisywane).
     */
    public function run(): void
    {
        $basePlDesktop = public_path('images/seeds/countries/pl/desktop/1.jpg');
        $basePlMobile = public_path('images/seeds/countries/pl/mobile/1.jpg');

        if (! File::exists($basePlDesktop) || ! File::exists($basePlMobile)) {
            $this->command->error('Brak plików źródłowych w public/images/seeds/countries/pl/');

            return;
        }

        $countries = Country::query()
            ->pluck('countryCode')
            ->map(fn ($code) => strtolower(trim($code)))
            ->filter()
            ->unique()
            ->sort()
            ->values();

        if ($countries->isEmpty()) {
            $this->command->error('Brak krajów w bazie danych.');

            return;
        }

        $created = 0;
        foreach ($countries as $code) {
            if ($code === 'pl') {
                continue;
            }

            $copied = false;
            foreach (['desktop' => $basePlDesktop, 'mobile' => $basePlMobile] as $folder => $placeholder) {
                $path = public_path("images/seeds/countries/{$code}/{$folder}");
                File::ensureDirectoryExists($path, 0755);

                if (! File::exists("{$path}/1.jpg")) {
                    File::copy($placeholder, "{$path}/1.jpg");
                    $copied = true;
                }
            }

            if ($copied) {
                $created++;
                $this->command->info("Utworzono foldery i wstawiono zdjęcie zastępcze dla kraju: {$code}");
            }
        }

        $this->command->info("✅ Krajów w bazie: {$countries->count()}, uzupełniono: {$created}.");
    }
}

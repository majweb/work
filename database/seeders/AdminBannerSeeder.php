<?php

namespace Database\Seeders;

use App\Models\AdminBanner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AdminBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $langs = config('langsShorts');

        // Tworzymy przykładowy baner, jeśli żaden nie istnieje
        $banner = AdminBanner::firstOrCreate(
            ['title' => 'Domyślny Baner'],
            ['is_active' => true]
        );

        // Ścieżka do folderu z grafikami (użytkownik musi tam wgrać pliki o nazwach np. pl.jpg, en.jpg itd.)
        $sourcePath = public_path('images/banners/admin');

        if (!File::exists($sourcePath)) {
            File::makeDirectory($sourcePath, 0755, true);
            $this->command->info("Utworzono katalog: $sourcePath. Umieść tam pliki językowe (np. pl.jpg, en.jpg).");
            return;
        }

        foreach ($langs as $lang) {
            // Szukamy pliku dla danego języka (wspieramy jpg, png, webp, jpeg)
            $fileFound = false;
            $extensions = ['jpg', 'png', 'webp', 'jpeg'];

            foreach ($extensions as $ext) {
                // Sprawdzamy wersję z małych liter i wielkich liter
                $possibleFiles = [
                    "{$lang}.{$ext}",
                    strtoupper($lang) . "." . $ext,
                    strtoupper($lang) . "." . strtoupper($ext),
                    $lang . "." . strtoupper($ext),
                ];

                foreach ($possibleFiles as $fileName) {
                    $filePath = $sourcePath . DIRECTORY_SEPARATOR . $fileName;

                    if (File::exists($filePath)) {
                        // Czyścimy starą kolekcję dla tego języka
                        $banner->clearMediaCollection('images_' . $lang);

                        // Kopiujemy plik do media library
                        $banner->addMedia($filePath)
                            ->preservingOriginal()
                            ->toMediaCollection('images_' . $lang);

                        $this->command->info("Dodano grafikę dla języka: $lang ($fileName)");
                        $fileFound = true;
                        break 2; // Wyjście z obu pętli (extensions i possibleFiles)
                    }
                }
            }

            if (!$fileFound) {
                $this->command->warn("Nie znaleziono grafiki dla języka: $lang");
            }
        }
    }
}

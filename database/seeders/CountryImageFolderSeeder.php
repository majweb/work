<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountryImageFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = ["pl", "de", "gb", "fr", "it", "es", "nl", "be", "at", "ch", "se", "no", "dk", "fi", "ie", "pt", "gr", "cz", "sk", "hu", "ro", "bg", "hr", "si", "ee", "lv", "lt", "cy", "mt", "lu", "is", "li", "mc", "sm", "ad", "va", "ua", "by", "ru", "md", "ge", "am", "az", "tr", "kz", "uz", "tm", "kg", "tj", "af", "pk", "in", "bd", "np", "bt", "lk", "mv", "mm", "th", "la", "kh", "vn", "my", "sg", "id", "ph", "bn", "tl", "cn", "jp", "kr", "kp", "mn", "tw", "au", "nz", "pg", "fj", "sb", "vu", "ws", "to", "ki", "tv", "nr", "mh", "pw", "fm", "us", "ca", "mx", "gt", "bz", "sv", "hn", "ni", "cr", "pa", "cu", "jm", "ht", "do", "kn", "ag", "dm", "lc", "vc", "gd", "bb", "tt", "bs", "br", "ar", "cl", "co", "pe", "ve", "ec", "bo", "py", "uy", "gy", "sr", "dz", "ao", "bj", "bw", "bf", "bi", "cv", "cm", "cf", "td", "km", "cg", "cd", "dj", "eg", "gq", "er", "sz", "et", "ga", "gm", "gh", "gn", "gw", "ci", "ke", "ls", "lr", "ly", "mg", "mw", "ml", "mr", "mu", "ma", "mz", "na", "ne", "ng", "rw", "st", "sn", "sc", "sl", "so", "za", "ss", "sd", "tz", "tg", "tn", "ug", "zm", "zw"];

        $basePlDesktop = public_path('images/seeds/countries/pl/desktop/1.jpg');
        $basePlMobile = public_path('images/seeds/countries/pl/mobile/1.jpg');

        if (!File::exists($basePlDesktop) || !File::exists($basePlMobile)) {
            $this->command->error("Brak plików źródłowych w public/images/seeds/countries/pl/");
            return;
        }

        foreach ($countries as $code) {
            if ($code === 'pl') {
                continue;
            }

            $desktopPath = public_path("images/seeds/countries/{$code}/desktop");
            $mobilePath = public_path("images/seeds/countries/{$code}/mobile");

            if (!File::isDirectory($desktopPath)) {
                File::makeDirectory($desktopPath, 0755, true);
            }

            if (!File::isDirectory($mobilePath)) {
                File::makeDirectory($mobilePath, 0755, true);
            }

            File::copy($basePlDesktop, "{$desktopPath}/1.jpg");
            File::copy($basePlMobile, "{$mobilePath}/1.jpg");

            $this->command->info("Utworzono foldery i skopiowano obrazy dla kraju: {$code}");
        }
    }
}

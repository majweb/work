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
        $countries = ["ad", "ae", "af", "ag", "al", "am", "ao", "ar", "at", "au", "az", "ba", "bb", "bd", "be", "bf", "bg", "bh", "bi", "bj", "bn", "bo", "br", "bs", "bt", "bw", "by", "bz", "ca", "cd", "cf", "cg", "ch", "ci", "cl", "cm", "cn", "co", "cr", "cu", "cv", "cy", "cz", "de", "dj", "dk", "dm", "do", "dz", "ec", "ee", "eg", "er", "es", "et", "fi", "fj", "fm", "fr", "ga", "gb", "gd", "ge", "gh", "gm", "gn", "gq", "gr", "gt", "gw", "gy", "hn", "hr", "ht", "hu", "id", "ie", "il", "in", "iq", "ir", "is", "it", "jm", "jo", "jp", "ke", "kg", "kh", "ki", "km", "kn", "kp", "kr", "kw", "kz", "la", "lb", "lc", "li", "lk", "lr", "ls", "lt", "lu", "lv", "ly", "ma", "mc", "md", "me", "mg", "mh", "mk", "ml", "mm", "mn", "mr", "mt", "mu", "mv", "mw", "mx", "my", "mz", "na", "ne", "ng", "ni", "nl", "no", "np", "nr", "nz", "om", "pa", "pe", "pg", "ph", "pk", "pl", "pt", "pw", "py", "qa", "ro", "rs", "ru", "rw", "sa", "sb", "sc", "sd", "se", "sg", "si", "sk", "sl", "sm", "sn", "so", "sr", "ss", "st", "sv", "sy", "sz", "td", "tg", "th", "tj", "tl", "tm", "tn", "to", "tr", "tt", "tv", "tz", "ua", "ug", "us", "uy", "uz", "va", "vc", "ve", "vn", "vu", "ws", "ye", "za", "zm", "zw"];
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

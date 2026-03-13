<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use Illuminate\Support\Str;

class ProcessLanguageZips extends Command
{
    protected $signature = 'app:process-language-zips';
    protected $description = 'Wypakowuje grafiki z plików ZIP do folderów językowych w generatorze';

    // Mapowanie polskich nazw z plików ZIP na skróty z config('langsShorts')
    protected array $languageMap = [
        'AMHARSKI' => 'am',
        'ARABSKI' => 'ar',
        'AZERSKI' => 'az',
        'BENGALSKI' => 'bn',
        'BIRMIŃSKI' => 'my',
        'DZONGKHA' => 'dz',
        'GRUZIŃSKI' => 'ka',
        'HEBRAJSKI' => 'he',
        'HINDI' => 'hi',
        'INDONEZYJSKI' => 'id',
        'JAPOŃSKI' => 'ja',
        'KHMERSKI' => 'km',
        'KOREAŃSKI' => 'ko',
        'LAOTAŃSKI' => 'lo',
        'MALAJSKI' => 'ms',
        'MALEDIWSKI' => 'dv',
        'MALEDIWSKI (DIVEHI)' => 'dv',
        'MANDARYŃSKI' => 'zh',
        'MONGOLSKI' => 'mn',
        'NEPALSKI' => 'ne',
        'ORMIAŃSKI' => 'hy',
        'PASZTO' => 'ps',
        'PERSKI' => 'fa',
        'SYNGALSKI' => 'si',
        'TADŻYCKI' => 'tg',
        'TAJSKI' => 'th',
        'TURKMEŃSKI' => 'tk',
        'UZBECKI' => 'uz',
        'WIETNAMSKI' => 'vi',
    ];

    public function handle(): void
    {
        $zipPath = 'generator/zip';
        $destinationBase = 'generator';

        $files = Storage::disk('public')->files($zipPath);
        $zips = array_filter($files, fn($f) => Str::endsWith($f, '.zip'));

        if (empty($zips)) {
            $this->error("Nie znaleziono plików ZIP w $zipPath");
            return;
        }

        $zipArchive = new ZipArchive;

        foreach ($zips as $zipFile) {
            $fileName = basename($zipFile);
            $this->info("Przetwarzanie: $fileName");

            // Wyciągnięcie nazwy języka z pliku (np. "AMHARSKI")
            $langName = $this->extractLanguageName($fileName);

            if (!isset($this->languageMap[$langName])) {
                $this->warn("Nie znaleziono mapowania dla języka: $langName");
                continue;
            }

            $langCode = $this->languageMap[$langName];
            $targetDir = storage_path("app/public/$destinationBase/$langCode");
            $fullZipPath = storage_path("app/public/$zipFile");

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            if ($zipArchive->open($fullZipPath) === TRUE) {
                for ($i = 0; $i < $zipArchive->numFiles; $i++) {
                    $entryName = $zipArchive->getNameIndex($i);
                    $extension = strtolower(pathinfo($entryName, PATHINFO_EXTENSION));

                    // Interesują nas tylko pliki graficzne
                    if (in_array($extension, ['png', 'jpg', 'jpeg', 'svg'])) {
                        // Wypakowujemy bezpośrednio do folderu języka (bez struktury podfolderów z ZIPa)
                        copy("zip://".$fullZipPath."#$entryName", $targetDir . '/' . basename($entryName));
                    }
                }
                $zipArchive->close();
                $this->info("Sukces: $langCode");
            } else {
                $this->error("Błąd otwarcia ZIP: $fileName");
            }
        }
    }

    private function extractLanguageName(string $fileName): string
    {
        // Usuwa "DO LINKU " i ".zip"
        $name = str_replace(['DO LINKU ', '.zip'], '', $fileName);
        return trim($name);
    }
}

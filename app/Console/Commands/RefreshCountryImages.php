<?php

namespace App\Console\Commands;

use App\Models\Country;
use App\Services\CountryImageImporter;
use Illuminate\Console\Command;

class RefreshCountryImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'countries:refresh-images
                            {codes?* : Kody krajów, np. de fr}
                            {--all : Podmień zdjęcia wszystkich krajów}
                            {--force : Nie pytaj o potwierdzenie}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Podmienia zdjęcia krajów na pliki z public/images/seeds/countries/{kod}/{desktop|mobile}';

    /**
     * Execute the console command.
     */
    public function handle(CountryImageImporter $importer): int
    {
        $codes = array_map('strtolower', $this->argument('codes'));

        if (! $codes && ! $this->option('all')) {
            $this->error('Podaj kody krajów (np. countries:refresh-images de fr) albo użyj opcji --all.');

            return self::FAILURE;
        }

        $countries = $this->option('all')
            ? Country::orderBy('countryCode')->get()
            : Country::whereIn('countryCode', $codes)->orderBy('countryCode')->get();

        $unknown = array_diff($codes, $countries->pluck('countryCode')->map(fn ($code) => strtolower($code))->all());
        if ($unknown) {
            $this->warn('Nie ma w bazie krajów o kodach: '.implode(', ', $unknown));
        }

        if ($countries->isEmpty()) {
            $this->error('Nie znaleziono żadnego kraju do przetworzenia.');

            return self::FAILURE;
        }

        // Plan: co zostanie podmienione. Kolekcja bez plików źródłowych jest pomijana, żeby kraj nie został bez zdjęć.
        $plan = [];
        $rows = [];
        foreach ($countries as $country) {
            foreach (CountryImageImporter::COLLECTIONS as $folder => $collection) {
                $files = $importer->sourceFiles($country, $folder);
                $current = $country->getMedia($collection)->count();

                if ($files) {
                    $plan[] = [$country, $collection, $files];
                }

                $rows[] = [
                    $country->countryCode,
                    $folder,
                    $current,
                    count($files),
                    $files ? 'podmiana' : 'pominięte (brak plików)',
                ];
            }
        }

        $this->table(['Kraj', 'Zestaw', 'Obecnie zdjęć', 'Nowych plików', 'Akcja'], $rows);

        if (! $plan) {
            $this->warn('Brak plików źródłowych dla wybranych krajów. Nic nie zostało zmienione.');

            return self::SUCCESS;
        }

        if (! $this->option('force') && ! $this->confirm('Usunąć obecne zdjęcia z kolekcji oznaczonych „podmiana” i wgrać nowe?')) {
            $this->info('Anulowano.');

            return self::SUCCESS;
        }

        $added = 0;
        $removed = 0;
        foreach ($plan as [$country, $collection, $files]) {
            $result = $importer->replace($country, $collection, $files);
            $added += $result['added'];
            $removed += $result['removed'];
        }

        $this->info("✅ Dodano zdjęć: {$added}, usunięto starych: {$removed}.");

        return self::SUCCESS;
    }
}

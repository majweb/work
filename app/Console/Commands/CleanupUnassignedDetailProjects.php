<?php

namespace App\Console\Commands;

use App\Models\DetailProject;
use App\Services\DictionaryService;
use Illuminate\Console\Command;

class CleanupUnassignedDetailProjects extends Command
{
    protected $signature = "app:cleanup-unassigned-detail-projects {--dry-run : Wyświetl rekordy do usunięcia bez ich faktycznego kasowania}";
    protected $description = "Usuwa nieprzypisane do kategorii obowiązki projektów.";

    public function handle(DictionaryService $dictionaryService): int
    {
        $dryRun = $this->option("dry-run");

        $query = DetailProject::whereDoesntHave("categories");

        $count = $query->count();

        if ($count === 0) {
            $this->info("Nie znaleziono nieprzypisanych obowiązków do usunięcia.");
            return self::SUCCESS;
        }

        if ($dryRun) {
            $this->info("Znaleziono {$count} rekordów do usunięcia (Dry Run):");
            $query->get()->each(function ($item) {
                $this->line("- ID: {$item->id}, Name: " . json_encode($item->getRawOriginal("name")));
            });
            return self::SUCCESS;
        }

        if (!$this->confirm("Czy na pewno chcesz usunąć {$count} rekordów?", false)) {
            $this->warn("Operacja anulowana.");
            return self::FAILURE;
        }

        $query->delete();

        $dictionaryService->clearCategories();

        $this->info("Pomyślnie usunięto {$count} rekordów i odświeżono cache.");

        return self::SUCCESS;
    }
}

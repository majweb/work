<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Console\Command;

class UpdateProjectTitles extends Command
{
    /**
     * Nazwa i sygnatura polecenia.
     *
     * @var string
     */
    protected $signature = 'projects:update-titles';

    /**
     * Opis polecenia.
     *
     * @var string
     */
    protected $description = 'Aktualizuje tytuły wszystkich ofert pracy na podstawie ich danych (stanowisko, lokalizacja, wynagrodzenie)';

    /**
     * Wykonanie polecenia.
     */
    public function handle(): int
    {
        $projects = Project::all();

        if ($projects->isEmpty()) {
            $this->info('Brak projektów do aktualizacji.');

            return self::SUCCESS;
        }

        $this->withProgressBar($projects, function (Project $project) {
            $this->updateTitle($project);
        });

        $this->newLine();
        $this->info('Tytuły wszystkich ofert zostały pomyślnie zaktualizowane.');

        return self::SUCCESS;
    }

    /**
     * Logika generowania i aktualizacji tytułu.
     */
    private function updateTitle(Project $project): void
    {
        $title = [];
        $locales = config('langsShorts', ['pl', 'en']);

        foreach ($locales as $lang) {
            // Pobieranie nazwy stanowiska lub branży
            $posTitle = $project->position['allTranslations']['title'][$lang]
                ?? $project->profession['allTranslations']['title'][$lang]
                ?? null;

            // Pobieranie kraju
            $countryTitle = $project->countryWork['allTranslations'][$lang]
                ?? $project->countryWork['name']
                ?? null;

            // Składanie tytułu (logika identyczna jak w ProjectController)
            $title[$lang] = ($posTitle ? $posTitle.', ' : '').
                ($countryTitle ? $countryTitle.', ' : '').
                ($project->cityWork ?? '').', '.
                ($project->basicSalaryFrom ?? '0').' '.
                ($project->currency['name'] ?? '').' '.
                __('translate.'.$project->salary_type, [], $lang).
                (isset($project->salary_period['allTranslations']['name'][$lang]) ? ' / '.$project->salary_period['allTranslations']['name'][$lang] : (isset($project->salary_period['name']) ? ' / '.$project->salary_period['name'] : ''));
        }

        $project->update(['title' => $title]);
    }
}

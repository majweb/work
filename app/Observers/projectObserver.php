<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class projectObserver
{
    private function clearCategoriesCache(Project $project): void
    {
        // Czyść cache dla kraju
        Cache::forget('countriesWithProject');
        Cache::forget('workingModes');
        Cache::forget('experiences');
        Cache::forget('typesOfContract');
        Cache::forget('workLoads');

        // Pobierz kategorię i wyczyść cache dla podkategorii
        $category = is_string($project->category)
            ? json_decode($project->category, true)
            : $project->category;

        if (isset($category['value'])) {
            Cache::forget('category_sub_' . $category['value']);
        }

        // Pobierz podkategorię i wyczyść cache dla zawodów
        $categorySub = is_string($project->categorySub)
            ? json_decode($project->categorySub, true)
            : $project->categorySub;

        if (isset($categorySub['value'])) {
            Cache::forget('professions_' . $categorySub['value']);
        }

        // Pobierz zawód i wyczyść cache dla stanowisk
        $profession = is_string($project->profession)
            ? json_decode($project->profession, true)
            : $project->profession;

        if (isset($profession['value'])) {
            Cache::forget('positions_' . $profession['value']);
        }
    }

    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        $this->clearCategoriesCache($project);
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        // Wyczyść cache zarówno dla starych jak i nowych wartości
        $this->clearCategoriesCache($project);

        if ($project->wasChanged('category')) {
            $oldCategory = is_string($project->getOriginal('category'))
                ? json_decode($project->getOriginal('category'), true)
                : $project->getOriginal('category');

            if (isset($oldCategory['value'])) {
                Cache::forget('category_sub_' . $oldCategory['value']);
            }
        }

        if ($project->wasChanged('categorySub')) {
            $oldCategorySub = is_string($project->getOriginal('categorySub'))
                ? json_decode($project->getOriginal('categorySub'), true)
                : $project->getOriginal('categorySub');

            if (isset($oldCategorySub['value'])) {
                Cache::forget('professions_' . $oldCategorySub['value']);
            }
        }

        if ($project->wasChanged('profession')) {
            $oldProfession = is_string($project->getOriginal('profession'))
                ? json_decode($project->getOriginal('profession'), true)
                : $project->getOriginal('profession');

            if (isset($oldProfession['value'])) {
                Cache::forget('positions_' . $oldProfession['value']);
            }
        }
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        $this->clearCategoriesCache($project);
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        $this->clearCategoriesCache($project);
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        $this->clearCategoriesCache($project);
    }
}

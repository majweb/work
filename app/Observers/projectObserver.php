<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class projectObserver
{
    private function clearCategoriesCache(Project $project): void
    {
        $locales = config('langsShorts', []);

        // Czyścimy cache współrzędnych dla miasta tego projektu
        if ($project->cityWork) {
            Cache::forget('city_coords_'.md5($project->cityWork));
        }

        // Jeśli miasto zostało zmienione, czyścimy też stare miasto
        if ($project->wasChanged('cityWork')) {
            Cache::forget('city_coords_'.md5($project->getOriginal('cityWork')));
        }

        // Czyść cache dla kraju dla wszystkich języków
        foreach ($locales as $locale) {
            Cache::forget('workingModes_' . $locale);
            Cache::forget('experiences_' . $locale);
            Cache::forget('typesOfContract_' . $locale);
            Cache::forget('workLoads_' . $locale);
            Cache::forget('categoriesAll_Admin_v2_' . $locale);
        }

        // Pobierz kategorię i wyczyść cache dla podkategorii
        $category = is_string($project->category)
            ? json_decode($project->category, true)
            : $project->category;

        if (isset($category['value'])) {
            foreach ($locales as $locale) {
                Cache::forget('category_sub_' . $category['value'] . '_' . $locale);
                Cache::forget('recruit_category_sub_' . $category['value'] . '_' . $locale);
            }
        }

        // Pobierz podkategorię i wyczyść cache dla zawodów
        $categorySub = is_string($project->categorySub)
            ? json_decode($project->categorySub, true)
            : $project->categorySub;

        if (isset($categorySub['value'])) {
            foreach ($locales as $locale) {
                Cache::forget('professions_' . $categorySub['value'] . '_' . $locale);
                Cache::forget('recruit_professions_' . $categorySub['value'] . '_' . $locale);
            }
        }

        // Pobierz zawód i wyczyść cache dla stanowisk
        $profession = is_string($project->profession)
            ? json_decode($project->profession, true)
            : $project->profession;

        if (isset($profession['value'])) {
            foreach ($locales as $locale) {
                Cache::forget('positions_' . $profession['value'] . '_' . $locale);
                Cache::forget('recruit_positions_' . $profession['value'] . '_' . $locale);
            }
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
        $locales = config('langsShorts', []);

        // Wyczyść cache zarówno dla starych jak i nowych wartości
        $this->clearCategoriesCache($project);

        if ($project->wasChanged('category')) {
            $oldCategory = is_string($project->getOriginal('category'))
                ? json_decode($project->getOriginal('category'), true)
                : $project->getOriginal('category');

            if (isset($oldCategory['value'])) {
                foreach ($locales as $locale) {
                    Cache::forget('category_sub_' . $oldCategory['value'] . '_' . $locale);
                    Cache::forget('recruit_category_sub_' . $oldCategory['value'] . '_' . $locale);
                }
            }
        }

        if ($project->wasChanged('categorySub')) {
            $oldCategorySub = is_string($project->getOriginal('categorySub'))
                ? json_decode($project->getOriginal('categorySub'), true)
                : $project->getOriginal('categorySub');

            if (isset($oldCategorySub['value'])) {
                foreach ($locales as $locale) {
                    Cache::forget('professions_' . $oldCategorySub['value'] . '_' . $locale);
                    Cache::forget('recruit_professions_' . $oldCategorySub['value'] . '_' . $locale);
                }
            }
        }

        if ($project->wasChanged('profession')) {
            $oldProfession = is_string($project->getOriginal('profession'))
                ? json_decode($project->getOriginal('profession'), true)
                : $project->getOriginal('profession');

            if (isset($oldProfession['value'])) {
                foreach ($locales as $locale) {
                    Cache::forget('positions_' . $oldProfession['value'] . '_' . $locale);
                    Cache::forget('recruit_positions_' . $oldProfession['value'] . '_' . $locale);
                }
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

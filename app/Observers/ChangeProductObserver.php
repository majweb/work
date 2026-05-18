<?php

namespace App\Observers;

use App\Models\ChangeProduct;
use Illuminate\Support\Facades\Cache;

class ChangeProductObserver
{
    /**
     * Wspólna logika czyszczenia cache po zmianie wyróżnienia (ID 9)
     */
    private function clearRelatedCache(ChangeProduct $changeProduct): void
    {
        if ($changeProduct->product_id == 9) {
            $user = $changeProduct->user;
            if ($user) {
                $locales = config('langsShorts', ['pl', 'en', 'de']);
                $projects = $user->projects()->get();

                // Zbieramy unikalne ID podkategorii, w których użytkownik ma projekty
                $subCategoryIds = [];

                foreach ($projects as $project) {
                    // Czyścimy cache pojedynczego projektu (istniejąca logika)
                    foreach ($locales as $locale) {
                        Cache::forget("project_single_{$project->id}_{$locale}");
                    }

                    // Pobieramy ID podkategorii z projektu
                    $categorySub = is_string($project->categorySub)
                        ? json_decode($project->categorySub, true)
                        : $project->categorySub;

                    if (isset($categorySub['id'])) {
                        $subCategoryIds[] = $categorySub['id'];
                    }
                }

                // Czyścimy cache "Podobnych ofert" dla każdej dotkniętej podkategorii
                $uniqueSubCategories = array_unique($subCategoryIds);
                foreach ($uniqueSubCategories as $subId) {
                    foreach ($locales as $locale) {
                        Cache::forget("similar_projects_{$subId}_{$locale}");
                    }
                }

                // Inkrementujemy wersję listy projektów, aby odświeżyć globalną listę
                $version = Cache::get('projects_list_version', 1);
                Cache::forever('projects_list_version', $version + 1);
            }
        }
    }

    /**
     * Handle the ChangeProduct "saved" event.
     */
    public function saved(ChangeProduct $changeProduct): void
    {
        $this->clearRelatedCache($changeProduct);
    }

    /**
     * Handle the ChangeProduct "deleted" event.
     */
    public function deleted(ChangeProduct $changeProduct): void
    {
        $this->clearRelatedCache($changeProduct);
    }
}

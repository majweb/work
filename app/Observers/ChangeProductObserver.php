<?php

namespace App\Observers;

use App\Models\ChangeProduct;
use Illuminate\Support\Facades\Cache;

class ChangeProductObserver
{
    /**
     * Handle the ChangeProduct "saved" event.
     */
    public function saved(ChangeProduct $changeProduct): void
    {
        if ($changeProduct->product_id == 9) {
            $user = $changeProduct->user;
            if ($user) {
                $locales = config('langsShorts', []);
                foreach ($user->projects()->get() as $project) {
                    foreach ($locales as $locale) {
                        Cache::forget("project_single_{$project->id}_{$locale}");
                    }
                }
            }
        }
    }

    /**
     * Handle the ChangeProduct "deleted" event.
     */
    public function deleted(ChangeProduct $changeProduct): void
    {
        if ($changeProduct->product_id == 9) {
            $user = $changeProduct->user;
            if ($user) {
                $locales = config('langsShorts', ['pl', 'en', 'de']);
                foreach ($user->projects()->get() as $project) {
                    foreach ($locales as $locale) {
                        Cache::forget("project_single_{$project->id}_{$locale}");
                    }
                }
            }
        }
    }
}

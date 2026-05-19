<?php

namespace App\Observers;

use App\Models\CvClassic;
use Illuminate\Support\Facades\Cache;

class CvClassicObserver
{
    /**
     * Handle the CvClassic "saved" event.
     */
    public function saved(CvClassic $cvClassic): void
    {
        $this->clearCache($cvClassic->worker_id);
    }

    /**
     * Handle the CvClassic "deleted" event.
     */
    public function deleted(CvClassic $cvClassic): void
    {
        $this->clearCache($cvClassic->worker_id);
    }

    /**
     * Clear the cache for the specified user across all languages.
     */
    private function clearCache($userId): void
    {
        if (!$userId) {
            return;
        }

        $locales = config('langsShorts', []);

        foreach ($locales as $locale) {
            Cache::forget("user_cvs_{$userId}_{$locale}");
        }
    }
}

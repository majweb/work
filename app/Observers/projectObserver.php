<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class projectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        Cache::forget('countriesWithProject');

    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        Cache::forget('countriesWithProject');

    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        Cache::forget('countriesWithProject');

    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        Cache::forget('countriesWithProject');

    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        Cache::forget('countriesWithProject');

    }
}

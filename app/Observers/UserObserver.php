<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserObserver
{
    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        if ($user->wasChanged('user_blocked')) {
            $this->clearProjectsListCache();
        }
    }

    /**
     * Clear the projects list cache by incrementing the version.
     */
    private function clearProjectsListCache(): void
    {
        $version = Cache::get('projects_list_version', 1);
        Cache::forever('projects_list_version', (int) $version + 1);
    }
}

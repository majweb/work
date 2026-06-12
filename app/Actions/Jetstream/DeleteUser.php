<?php

namespace App\Actions\Jetstream;

use App\Models\User;
use App\Services\CrmService;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     */
    public function delete(User $user): void
    {
        if (config('services.crm.url') && config('services.crm.key') && $user->hasRole('firm')) {
            try {
                app(CrmService::class)->notifyAccountDeleted($user);
            } catch (\Exception $e) {
                \Log::error('CRM Deletion Notification Error: '.$e->getMessage());
            }
        }
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}

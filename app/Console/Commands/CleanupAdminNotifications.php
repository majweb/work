<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanupAdminNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cleanup-admin-notifications';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Usuwa powiadomienia administratorów starsze niż 2 miesiące';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $adminRoles = ['admin', 'admin-sub'];
        $existingRoles = \Spatie\Permission\Models\Role::whereIn('name', $adminRoles)->pluck('name')->toArray();

        if (empty($existingRoles)) {
            $this->warn('Nie znaleziono ról administratora w bazie danych.');

            return;
        }

        $adminIds = \App\Models\User::role($existingRoles)->pluck('id');

        $deleted = \Illuminate\Support\Facades\DB::table('notifications')
            ->whereIn('notifiable_id', $adminIds)
            ->where('notifiable_type', \App\Models\User::class)
            ->where('created_at', '<', now()->subMonths(2))
            ->delete();

        $this->info("Usunięto {$deleted} starych powiadomień administratorów.");
    }
}

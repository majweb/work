<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CleanupAdminNotificationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_cleans_up_old_admin_notifications(): void
    {
        // Tworzymy role jeśli nie istnieją
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Tworzymy administratora i zwykłego użytkownika
        $admin = User::factory()->create();
        $admin->assignRole($adminRole);

        $user = User::factory()->create();
        $user->assignRole($userRole);

        // Dodajemy powiadomienia dla admina (stare i nowe)
        DB::table('notifications')->insert([
            [
                'id' => \Illuminate\Support\Str::uuid()->toString(),
                'type' => 'App\Notifications\TestNotification',
                'notifiable_type' => User::class,
                'notifiable_id' => $admin->id,
                'data' => '{}',
                'created_at' => now()->subMonths(3),
            ],
            [
                'id' => \Illuminate\Support\Str::uuid()->toString(),
                'type' => 'App\Notifications\TestNotification',
                'notifiable_type' => User::class,
                'notifiable_id' => $admin->id,
                'data' => '{}',
                'created_at' => now()->subMonth(),
            ],
        ]);

        // Dodajemy powiadomienie dla zwykłego użytkownika (stare)
        DB::table('notifications')->insert([
            'id' => \Illuminate\Support\Str::uuid()->toString(),
            'type' => 'App\Notifications\TestNotification',
            'notifiable_type' => User::class,
            'notifiable_id' => $user->id,
            'data' => '{}',
            'created_at' => now()->subMonths(3),
        ]);

        // Uruchamiamy komendę
        $this->artisan('app:cleanup-admin-notifications')
            ->expectsOutputToContain('Usunięto 1 starych powiadomień administratorów.')
            ->assertExitCode(0);

        // Sprawdzamy bazę danych
        $this->assertDatabaseCount('notifications', 2);

        // Powiadomienie admina sprzed miesiąca powinno zostać
        $this->assertDatabaseHas('notifications', [
            'notifiable_id' => $admin->id,
            'created_at' => now()->subMonth()->toDateTimeString(),
        ]);

        // Powiadomienie zwykłego użytkownika sprzed 3 miesięcy powinno zostać
        $this->assertDatabaseHas('notifications', [
            'notifiable_id' => $user->id,
            'created_at' => now()->subMonths(3)->toDateTimeString(),
        ]);
    }
}

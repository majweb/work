<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class UserObserverTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_blocked_change_increments_projects_list_version(): void
    {
        // Ustawiamy początkową wersję cache
        Cache::forever('projects_list_version', 1);

        // Tworzymy użytkownika
        $user = User::factory()->create([
            'user_blocked' => null,
        ]);

        // Zmieniamy status na zablokowany
        $user->user_blocked = now();
        $user->save();

        // Sprawdzamy, czy wersja została zinkrementowana
        $this->assertEquals(2, Cache::get('projects_list_version'));

        // Zmieniamy status na odblokowany
        $user->user_blocked = null;
        $user->save();

        // Sprawdzamy, czy wersja została zinkrementowana ponownie
        $this->assertEquals(3, Cache::get('projects_list_version'));
    }

    public function test_other_user_changes_do_not_increment_projects_list_version(): void
    {
        // Ustawiamy początkową wersję cache
        Cache::forever('projects_list_version', 1);

        // Tworzymy użytkownika
        $user = User::factory()->create([
            'name' => 'Old Name',
        ]);

        // Zmieniamy imię (user_blocked pozostaje bez zmian)
        $user->name = 'New Name';
        $user->save();

        // Sprawdzamy, czy wersja pozostała bez zmian
        $this->assertEquals(1, Cache::get('projects_list_version'));
    }
}

<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class ImpersonateTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Utworzenie ról
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'firm']);
    }

    public function test_admin_can_impersonate_user(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $user = User::factory()->create(['name' => 'Test User']);
        $user->assignRole('firm');

        $response = $this->actingAs($admin)
            ->post(route('admin.firms.impersonate', $user->id));

        $response->assertRedirect(route('dashboard'));
        $this->assertEquals($user->id, auth()->id());

        // Sprawdzamy czy klucz impersonate istnieje w sesji po przekierowaniu
        $this->assertEquals($admin->id, session('impersonate'));
    }

    public function test_non_admin_cannot_impersonate(): void
    {
        $user1 = User::factory()->create();
        $user1->assignRole('firm');

        $user2 = User::factory()->create();
        $user2->assignRole('firm');

        $response = $this->actingAs($user1)
            ->post(route('admin.firms.impersonate', $user2->id));

        $response->assertStatus(403);
    }

    public function test_admin_can_stop_impersonating(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $user = User::factory()->create();
        $user->assignRole('firm');

        // Rozpoczęcie impersonacji
        $this->actingAs($admin)
            ->post(route('admin.firms.impersonate', $user->id));

        $this->assertEquals($user->id, auth()->id());

        // Symulacja sesji dla stop (actingAs nie zawsze utrzymuje sesję między żądaniami w testach)
        $response = $this->withSession(['impersonate' => $admin->id])
            ->post(route('admin.impersonate.stop'));

        $response->assertRedirect(route('admin.firms.index'));
        $this->assertEquals($admin->id, auth()->id());
        $this->assertFalse(session()->has('impersonate'));
    }
}

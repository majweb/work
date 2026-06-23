<?php

namespace Tests\Feature\Front;

use App\Models\Firm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use Inertia\Testing\AssertableInertia as Assert;

class FirmsSortingAndFilteringTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Role::create(['name' => 'firm']);
    }

    public function test_firms_are_sorted_alphabetically(): void
    {
        $userB = User::factory()->create(['name' => 'B Firm', 'profile_photo_path' => 'photo.jpg']);
        $userB->assignRole('firm');
        Firm::factory()->create([
            'user_id' => $userB->id,
            'nip' => '1234567891', 'street' => 'S', 'number' => '1', 'city' => 'C', 'postal' => 'P', 'country' => 'C', 'description' => 'D'
        ]);

        $userA = User::factory()->create(['name' => 'A Firm', 'profile_photo_path' => 'photo.jpg']);
        $userA->assignRole('firm');
        Firm::factory()->create([
            'user_id' => $userA->id,
            'nip' => '1234567892', 'street' => 'S', 'number' => '1', 'city' => 'C', 'postal' => 'P', 'country' => 'C', 'description' => 'D'
        ]);

        $response = $this->get('/firms');

        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Front/Firms')
            ->has('firms.data', 2)
            ->where('firms.data.0.name', 'A Firm')
            ->where('firms.data.1.name', 'B Firm')
        );
    }

    public function test_incomplete_firms_are_not_visible(): void
    {
        // Complete firm
        $userComplete = User::factory()->create(['name' => 'Complete', 'profile_photo_path' => 'photo.jpg']);
        $userComplete->assignRole('firm');
        Firm::factory()->create([
            'user_id' => $userComplete->id,
            'nip' => '1234567893', 'street' => 'S', 'number' => '1', 'city' => 'C', 'postal' => 'P', 'country' => 'C', 'description' => 'D'
        ]);

        // Incomplete - missing photo
        $userNoPhoto = User::factory()->create(['name' => 'No Photo', 'profile_photo_path' => null]);
        $userNoPhoto->assignRole('firm');
        Firm::factory()->create([
            'user_id' => $userNoPhoto->id,
            'nip' => '1234567894', 'street' => 'S', 'number' => '1', 'city' => 'C', 'postal' => 'P', 'country' => 'C', 'description' => 'D'
        ]);

        // Incomplete - missing nip in firm
        $userNoNip = User::factory()->create(['name' => 'No Nip', 'profile_photo_path' => 'photo.jpg']);
        $userNoNip->assignRole('firm');
        Firm::factory()->create([
            'user_id' => $userNoNip->id,
            'nip' => null, 'street' => 'S', 'number' => '1', 'city' => 'C', 'postal' => 'P', 'country' => 'C', 'description' => 'D'
        ]);

        $response = $this->get('/firms');

        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Front/Firms')
            ->has('firms.data', 1)
            ->where('firms.data.0.name', 'Complete')
        );
    }
}

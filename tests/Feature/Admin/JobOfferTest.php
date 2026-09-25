<?php

namespace Tests\Feature\Admin;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\Concerns\CreatesProjects;
use Tests\TestCase;

class JobOfferTest extends TestCase
{
    use CreatesProjects;
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        foreach (['admin', 'firm'] as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
    }

    public function test_admin_can_see_all_job_offers_by_default(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        // Tworzymy ofertę z dzisiaj
        $this->createProject($admin, [
            'title' => ['pl' => 'Dzisiejsza oferta'],
            'created_at' => now(),
        ]);

        // Tworzymy ofertę z wczoraj
        $this->createProject($admin, [
            'title' => ['pl' => 'Wczorajsza oferta'],
            'created_at' => now()->subDay(),
        ]);

        $response = $this->actingAs($admin)->get(route('admin.job-offers.index'));

        $response->assertStatus(200);

        // Sprawdzamy czy obie oferty są widoczne
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/JobOffers/Index')
            ->has('offers.data', 2)
        );
    }

    public function test_admin_can_filter_job_offers_by_date(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $today = now()->toDateString();
        $yesterday = now()->subDay()->toDateString();

        $this->createProject($admin, [
            'title' => ['pl' => 'Dzisiejsza oferta'],
            'created_at' => $today,
        ]);

        $this->createProject($admin, [
            'title' => ['pl' => 'Wczorajsza oferta'],
            'created_at' => $yesterday,
        ]);

        // Filtrujemy po wczorajszej dacie
        $response = $this->actingAs($admin)->get(route('admin.job-offers.index', ['date' => $yesterday]));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/JobOffers/Index')
            ->has('offers.data', 1)
            ->where('offers.data.0.title.pl', 'Wczorajsza oferta')
        );
    }
}

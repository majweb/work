<?php

namespace Tests\Feature\Admin;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class JobOfferTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        $this->shiftWorkId = \App\Models\ShiftWork::create(['name' => ['pl' => 'Test']])->id;
    }

    private function createProject(User $user, array $overrides = []): Project
    {
        return Project::forceCreate(array_merge([
            'user_id' => $user->id,
            'recruiter_id' => $user->id,
            'title' => ['pl' => 'Oferta'],
            'category' => [],
            'categorySub' => [],
            'profession' => [],
            'position' => [],
            'currency' => [],
            'workingMode' => [],
            'typeOfContract' => [],
            'payoutMode' => [],
            'workingPlace' => [],
            'country' => [],
            'workLoad' => [],
            'shiftWork' => $this->shiftWorkId,
            'paySystem' => [],
            'days' => [],
            'basicSalaryFrom' => 0,
            'basicSalaryTo' => 0,
            'salary_type' => 'monthly',
            'workNight' => false,
            'experience' => [],
            'offer' => [],
            'wait' => [],
            'welcome' => [],
            'education' => null,
            'other_recruits' => [],
            'cv' => [],
            'langs' => [],
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ], $overrides));
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

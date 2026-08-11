<?php

namespace Tests\Feature\Admin;

use App\Models\DetailProject;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class DetailProjectSearchTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('permission:create-role admin web --no-interaction');

        $admin = User::factory()->create();
        $admin->assignRole('admin');
        $this->actingAs($admin);
    }

    public function test_it_can_search_detail_projects_case_insensitively(): void
    {
        DetailProject::create([
            'name' => ['pl' => 'Obowiązek Testowy', 'en' => 'Test Duty'],
        ]);

        // Test exact match
        $response = $this->get(route('admin.detail-projects.index', ['search' => 'Obowiązek Testowy']));
        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Admin/DetailProjects/Index')
            ->has('detailProjects.data', 1)
            ->where('detailProjects.data.0.name.pl', 'Obowiązek Testowy')
        );

        // Test lowercase match
        $response = $this->get(route('admin.detail-projects.index', ['search' => 'obowiązek testowy']));
        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Admin/DetailProjects/Index')
            ->has('detailProjects.data', 1)
        );

        // Test uppercase match
        $response = $this->get(route('admin.detail-projects.index', ['search' => 'OBOWIĄZEK TESTOWY']));
        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Admin/DetailProjects/Index')
            ->has('detailProjects.data', 1)
        );
    }
}

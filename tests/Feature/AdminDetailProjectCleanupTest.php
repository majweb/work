<?php

namespace Tests\Feature;

use App\Models\DetailProject;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Spatie\Permission\Models\Role;

class AdminDetailProjectCleanupTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
    }

    public function test_super_admin_can_cleanup_unassigned_detail_projects(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        // Create detail projects without categories
        DetailProject::factory()->count(5)->create();

        $this->assertEquals(5, DetailProject::whereDoesntHave('categories')->count());

        $response = $this->actingAs($admin)->delete(route('admin.detail-projects.cleanup'));

        $response->assertRedirect();
        $this->assertEquals(0, DetailProject::whereDoesntHave('categories')->count());
    }
}

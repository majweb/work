<?php

namespace Tests\Feature\Admin;

use App\Models\IpEmailBlock;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IpEmailBlockTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\RoleSeeder::class);
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');
    }

    public function test_admin_can_see_ip_email_blocks_list(): void
    {
        IpEmailBlock::create(['value' => '1.2.3.4', 'type' => 'ip']);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.security.ip-email-blocks.index'));

        $response->assertStatus(200)
            ->assertInertia(fn ($page) => $page
                ->component('Admin/Security/IpEmailBlock/Index')
                ->has('blocks.data', 1)
            );
    }

    public function test_admin_can_add_ip_block(): void
    {
        $response = $this->actingAs($this->admin)
            ->post(route('admin.security.ip-email-blocks.store'), [
                'value' => '192.168.1.1',
                'type' => 'ip',
                'reason' => 'Test reason',
            ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('ip_email_blocks', [
            'value' => '192.168.1.1',
            'type' => 'ip',
        ]);
    }

    public function test_admin_can_delete_block(): void
    {
        $block = IpEmailBlock::create(['value' => 'test@example.com', 'type' => 'email']);

        $response = $this->actingAs($this->admin)
            ->delete(route('admin.security.ip-email-blocks.destroy', $block->id));

        $response->assertRedirect();
        $this->assertDatabaseMissing('ip_email_blocks', [
            'id' => $block->id,
        ]);
    }
}

<?php

namespace Tests\Feature\Admin;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class TicketTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        $this->admin = User::factory()->create();
        $this->admin->assignRole('admin');
    }

    public function test_admin_can_see_tickets_list(): void
    {
        Ticket::factory()->count(3)->create();

        $response = $this->actingAs($this->admin)
            ->get(route('admin.tickets.index'));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->component('Admin/Tickets/Index')
            ->has('tickets.data', 3)
            ->has('filters')
        );
    }

    public function test_admin_can_filter_tickets_by_subject(): void
    {
        Ticket::factory()->create(['subject' => 'Problem z logowaniem']);
        Ticket::factory()->create(['subject' => 'Inny temat']);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.tickets.index', ['subject' => 'logowaniem']));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->has('tickets.data', 1)
            ->where('tickets.data.0.subject', 'Problem z logowaniem')
        );
    }

    public function test_admin_can_filter_tickets_by_type(): void
    {
        Ticket::factory()->create(['type' => 'tech_problem']);
        Ticket::factory()->create(['type' => 'question']);

        $response = $this->actingAs($this->admin)
            ->get(route('admin.tickets.index', ['type' => 'tech_problem']));

        $response->assertStatus(200);
        $response->assertInertia(fn ($page) => $page
            ->has('tickets.data', 1)
            ->where('tickets.data.0.type', 'tech_problem')
        );
    }

    public function test_admin_can_export_tickets_to_csv(): void
    {
        Ticket::factory()->count(2)->create();

        $response = $this->actingAs($this->admin)
            ->get(route('admin.tickets.export'));

        $response->assertStatus(200);
        $response->assertHeader('content-disposition', 'attachment; filename=tickets_' . now()->format('Y_m_d_H_i') . '.csv');
    }
}

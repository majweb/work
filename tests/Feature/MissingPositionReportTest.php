<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;
use Spatie\Permission\Models\Role;

class MissingPositionReportTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'firm']);
    }

    public function test_user_can_report_missing_position(): void
    {
        Notification::fake();

        $user = User::factory()->create();
        $user->assignRole('firm');
        \App\Models\Firm::factory()->create([
            'user_id' => $user->id,
            'name_invoice' => 'Test Company'
        ]);

        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $response = $this->actingAs($user)->postJson(route('projects.report-missing'), [
            'position_name' => 'Software Architect'
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => __('translate.missingPositionReported')]);

        Notification::assertSentTo(
            $admin,
            \App\Notifications\SystemActivityNotification::class,
            function ($notification, $channels) use ($user) {
                return $notification->data['type'] === 'missing_position' &&
                       $notification->data['content'] === 'Software Architect' &&
                       $notification->data['firm_name'] === 'Test Company' &&
                       $notification->data['firm_id'] === $user->id;
            }
        );
    }

    public function test_report_missing_position_is_rate_limited(): void
    {
        $user = User::factory()->create();
        $user->assignRole('firm');

        // First attempt - success
        $response = $this->actingAs($user)->postJson(route('projects.report-missing'), [
            'position_name' => 'Software Architect'
        ]);
        $response->assertStatus(200);

        // Second attempt - rate limited
        $response = $this->actingAs($user)->postJson(route('projects.report-missing'), [
            'position_name' => 'DevOps Engineer'
        ]);

        $response->assertStatus(429);
        $this->assertStringContainsString('30 min', $response->json('message'));
    }
}

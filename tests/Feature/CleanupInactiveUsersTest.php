<?php

namespace Tests\Feature;

use App\Mail\InactiveAccountNotification;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class CleanupInactiveUsersTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_sends_notification_after_one_year_of_inactivity(): void
    {
        Mail::fake();

        $user = User::factory()->create([
            'last_login_at' => now()->subYear()->subDay(),
            'inactive_notification_sent_at' => null,
        ]);

        $this->artisan('app:cleanup-inactive-users');

        Mail::assertSent(InactiveAccountNotification::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });

        $this->assertNotNull($user->fresh()->inactive_notification_sent_at);
    }

    public function test_it_cleans_up_projects_after_7_days_of_notification(): void
    {
        Mail::fake();

        $user = User::factory()->create([
            'last_login_at' => now()->subYear()->subDay(),
            'inactive_notification_sent_at' => now()->subDays(8),
        ]);

        Project::factory()->count(3)->create(['user_id' => $user->id]);

        $this->artisan('app:cleanup-inactive-users');

        $this->assertEquals(0, Project::where('user_id', $user->id)->count());
        $this->assertNotNull($user->fresh()->user_blocked);
        $this->assertNull($user->fresh()->inactive_notification_sent_at);
    }
}

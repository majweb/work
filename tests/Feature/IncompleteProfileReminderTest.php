<?php

namespace Tests\Feature;

use App\Mail\IncompleteProfileReminder;
use App\Models\Firm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class IncompleteProfileReminderTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_sends_reminders_to_firms_with_incomplete_profile_after_24_hours(): void
    {
        Mail::fake();

        // Firma starsza niż 24h z niepełnym profilem
        $user = User::factory()->create(['email' => 'incomplete@example.com']);
        $firm = Firm::factory()->create([
            'user_id' => $user->id,
            'created_at' => now()->subHours(25),
            'nip' => '', // Niekompletny profil
        ]);

        $this->artisan('app:send-incomplete-profile-reminders')
            ->expectsOutput('Sent 1 reminders.')
            ->assertExitCode(0);

        Mail::assertQueued(IncompleteProfileReminder::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });

        $this->assertNotNull($firm->refresh()->incomplete_profile_reminder_sent_at);
    }

    public function test_it_does_not_send_reminder_if_profile_is_complete(): void
    {
        Mail::fake();

        $user = User::factory()->create([
            'email' => 'complete@example.com',
            'profile_photo_path' => 'path/to/photo.jpg',
        ]);

        // Firma starsza niż 24h z kompletnym profilem
        $firm = Firm::factory()->create([
            'user_id' => $user->id,
            'created_at' => now()->subHours(25),
            'nip' => '1234567890',
            'street' => 'Testowa',
            'number' => '1',
            'city' => 'Warszawa',
            'postal' => '00-001',
            'country' => 'Polska',
            'description' => 'Opis firmy',
        ]);

        $this->artisan('app:send-incomplete-profile-reminders')
            ->expectsOutput('Sent 0 reminders.')
            ->assertExitCode(0);

        Mail::assertNothingSent();
    }

    public function test_it_does_not_send_reminder_if_firm_is_too_young(): void
    {
        Mail::fake();

        $user = User::factory()->create(['email' => 'young@example.com']);
        // Firma młodsza niż 24h
        Firm::factory()->create([
            'user_id' => $user->id,
            'created_at' => now()->subHours(12),
            'nip' => '',
        ]);

        $this->artisan('app:send-incomplete-profile-reminders')
            ->expectsOutput('Sent 0 reminders.')
            ->assertExitCode(0);

        Mail::assertNothingSent();
    }

    public function test_it_does_not_send_reminder_twice(): void
    {
        Mail::fake();

        $user = User::factory()->create(['email' => 'already_sent@example.com']);
        Firm::factory()->create([
            'user_id' => $user->id,
            'created_at' => now()->subHours(25),
            'nip' => '',
            'incomplete_profile_reminder_sent_at' => now()->subHours(2),
        ]);

        $this->artisan('app:send-incomplete-profile-reminders')
            ->expectsOutput('Sent 0 reminders.')
            ->assertExitCode(0);

        Mail::assertNothingSent();
    }
}

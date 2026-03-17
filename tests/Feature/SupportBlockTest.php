<?php

namespace Tests\Feature;

use App\Models\IpEmailBlock;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupportBlockTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\RoleSeeder::class);
    }

    public function test_user_is_blocked_by_ip_from_sending_support_ticket(): void
    {
        $user = User::factory()->create();
        $ip = '1.2.3.4';

        IpEmailBlock::create([
            'value' => $ip,
            'type' => 'ip',
            'reason' => 'Spamming',
        ]);

        session(['captcha_text' => '1234']);

        $response = $this->actingAs($user)
            ->withServerVariables(['REMOTE_ADDR' => $ip])
            ->post(route('support.store'), [
                'type' => 'question',
                'subject' => 'Test Subject',
                'content' => 'Test Content',
                'captcha' => '1234',
            ]);

        $response->assertSessionHasErrors(['captcha']);
        $this->assertEquals(
            trans('translate.application_blocked_message'),
            session('errors')->get('captcha')[0]
        );
    }

    public function test_user_is_blocked_by_email_from_sending_support_ticket(): void
    {
        $email = 'blocked@example.com';
        $user = User::factory()->create(['email' => $email]);

        IpEmailBlock::create([
            'value' => $email,
            'type' => 'email',
            'reason' => 'Spamming',
        ]);

        session(['captcha_text' => '1234']);

        $response = $this->actingAs($user)
            ->post(route('support.store'), [
                'type' => 'question',
                'subject' => 'Test Subject',
                'content' => 'Test Content',
                'captcha' => '1234',
            ]);

        $response->assertSessionHasErrors(['captcha']);
        $this->assertEquals(
            trans('translate.application_blocked_message'),
            session('errors')->get('captcha')[0]
        );
    }

    public function test_non_blocked_user_can_send_support_ticket(): void
    {
        $user = User::factory()->create(['email' => 'allowed@example.com']);
        session(['captcha_text' => '1234']);

        $response = $this->actingAs($user)
            ->post(route('support.store'), [
                'type' => 'question',
                'subject' => 'Test Subject',
                'content' => 'Test Content',
                'captcha' => '1234',
            ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('tickets', [
            'user_id' => $user->id,
            'subject' => 'Test Subject',
        ]);
    }
}

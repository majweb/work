<?php

namespace Tests\Feature\Front;

use App\Models\IpEmailBlock;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SecurityBlockTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\RoleSeeder::class);
        $this->seed(\Database\Seeders\ExperienceSeeder::class);
        $this->seed(\Database\Seeders\TypeOfContractSeeder::class);
        $this->seed(\Database\Seeders\WorkingModeSeeder::class);
        $this->seed(\Database\Seeders\WorkLoadSeeder::class);

        $this->user = User::factory()->create();
        $this->project = Project::factory()->create(['user_id' => $this->user->id]);

        session(['captcha_text' => '123456']);
    }

    public function test_next_step_is_blocked_by_ip(): void
    {
        IpEmailBlock::create([
            'value' => '127.0.0.1',
            'type' => 'ip',
            'reason' => 'Test IP block'
        ]);

        $response = $this->post(route('front.projects.next.step', $this->project), [
            'email' => 'test@example.com',
            'name' => 'John',
            'surname' => 'Doe',
            'phone' => '123456789',
            'captcha' => '123456',
            'agreements' => [1],
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['agreements' => trans('translate.application_blocked_message')]);
    }

    public function test_next_step_is_blocked_by_email(): void
    {
        IpEmailBlock::create([
            'value' => 'blocked@example.com',
            'type' => 'email',
            'reason' => 'Test Email block'
        ]);

        $response = $this->post(route('front.projects.next.step', $this->project), [
            'email' => 'blocked@example.com',
            'name' => 'John',
            'surname' => 'Doe',
            'phone' => '123456789',
            'captcha' => '123456',
            'agreements' => [1],
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['agreements' => trans('translate.application_blocked_message')]);
    }

    public function test_next_step_is_allowed_for_non_blocked(): void
    {
        $response = $this->post(route('front.projects.next.step', $this->project), [
            'email' => 'clean@example.com',
            'name' => 'John',
            'surname' => 'Doe',
            'phone' => '123456789',
            'captcha' => '123456',
            'agreements' => [1],
        ]);

        $response->assertRedirect(route('front.projects.applyView', $this->project));
        $response->assertSessionHasNoErrors();
    }
}

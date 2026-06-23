<?php

namespace Tests\Feature\Models;

use App\Models\Firm;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FirmProfileCompletionTest extends TestCase
{
    use RefreshDatabase;

    public function test_has_completed_profile_returns_false_if_user_has_no_photo(): void
    {
        $user = User::factory()->create(['profile_photo_path' => null]);
        $firm = Firm::factory()->create([
            'user_id' => $user->id,
            'nip' => '1234567890',
            'street' => 'Street',
            'number' => '1',
            'city' => 'City',
            'postal' => '00-000',
            'country' => 'Poland',
            'description' => 'Description',
        ]);

        // Obecnie test powinien ZAWIEŚĆ (zwrócić true), ponieważ jeszcze nie dodaliśmy sprawdzania zdjęcia.
        $this->assertFalse($firm->hasCompletedProfile());
    }

    public function test_has_completed_profile_returns_true_if_user_has_photo_and_all_fields_filled(): void
    {
        $user = User::factory()->create(['profile_photo_path' => 'path/to/photo.jpg']);
        $firm = Firm::factory()->create([
            'user_id' => $user->id,
            'nip' => '1234567890',
            'street' => 'Street',
            'number' => '1',
            'city' => 'City',
            'postal' => '00-000',
            'country' => 'Poland',
            'description' => 'Description',
        ]);

        $this->assertTrue($firm->hasCompletedProfile());
    }
}

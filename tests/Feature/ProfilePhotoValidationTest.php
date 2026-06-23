<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProfilePhotoValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile_photo_is_required_if_user_has_no_photo(): void
    {
        $this->actingAs($user = User::factory()->create([
            'profile_photo_path' => null,
        ]));

        $response = $this->put('/user/profile-information', [
            'name' => 'Test Name',
            'email' => 'test@example.com',
        ]);

        $response->assertSessionHasErrors('photo', null, 'updateProfileInformation');
        $this->assertNull($user->fresh()->profile_photo_path);
    }

    public function test_profile_photo_is_not_required_if_user_already_has_photo(): void
    {
        $this->actingAs($user = User::factory()->create([
            'profile_photo_path' => 'profile-photos/test.jpg',
        ]));

        $response = $this->put('/user/profile-information', [
            'name' => 'Test Name',
            'email' => 'test@example.com',
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertEquals('profile-photos/test.jpg', $user->fresh()->profile_photo_path);
    }

    public function test_profile_photo_can_be_updated(): void
    {
        Storage::fake('public');

        $this->actingAs($user = User::factory()->create());

        $response = $this->put('/user/profile-information', [
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'photo' => UploadedFile::fake()->image('avatar.jpg'),
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertNotNull($user->fresh()->profile_photo_path);
        Storage::disk('public')->assertExists($user->fresh()->profile_photo_path);
    }

    public function test_profile_photo_max_size_is_2mb(): void
    {
        Storage::fake('public');

        $this->actingAs($user = User::factory()->create(['profile_photo_path' => null]));

        // 2049 KB should fail
        $response = $this->put('/user/profile-information', [
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'photo' => UploadedFile::fake()->image('large.jpg')->size(2049),
        ]);

        $response->assertSessionHasErrors('photo', null, 'updateProfileInformation');

        // 2048 KB should pass
        $response = $this->put('/user/profile-information', [
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'photo' => UploadedFile::fake()->image('exact.jpg')->size(2048),
        ]);

        $response->assertSessionHasNoErrors();
    }
}

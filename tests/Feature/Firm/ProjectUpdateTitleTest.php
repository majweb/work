<?php

namespace Tests\Feature\Firm;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectUpdateTitleTest extends TestCase
{
    use RefreshDatabase;

    public function test_project_title_is_updated_in_firm_panel(): void
    {
        // 1. Setup: Seed roles and create a user
        $this->seed(\Database\Seeders\RoleSeeder::class);
        $user = User::factory()->create();
        $user->assignRole('firm');

        $project = Project::create([
            'user_id' => $user->id,
            'title' => ['en' => 'Old Title'],
            'category' => ['id' => 1, 'name' => 'Cat'],
            'categorySub' => ['id' => 1, 'name' => 'SubCat'],
            'profession' => [
                'id' => 1,
                'name' => 'Prof',
                'allTranslations' => ['title' => ['en' => 'Prof Title']]
            ],
            'position' => [
                'id' => 1,
                'name' => 'Pos',
                'allTranslations' => ['title' => ['en' => 'Pos Title']]
            ],
            'currency' => ['id' => 1, 'name' => 'USD'],
            'countryWork' => [
                'id' => 1,
                'name' => 'Country',
                'allTranslations' => ['en' => 'Country Title']
            ],
            'cityWork' => 'Old City',
            'basicSalaryFrom' => 1000,
            'basicSalaryTo' => 2000,
            'salary_type' => 'gross',
            'salary_period' => ['id' => 1, 'name' => 'month'],
            'workingMode' => ['id' => 1, 'name' => 'remote'],
            'typeOfContract' => ['id' => 1, 'name' => 'b2b'],
            'payoutMode' => ['id' => 1, 'name' => 'monthly'],
            'workingPlace' => ['id' => 1, 'name' => 'office'],
            'country' => ['id' => 1, 'name' => 'US'],
            'workLoad' => ['id' => 1, 'name' => 'full-time'],
            'shiftWork' => null,
            'paySystem' => null,
            'days' => null,
            'workNight' => false,
            'is_active' => true,
        ]);

        // 2. Act: Update the project
        $this->actingAs($user);

        // We need to match the structure expected by StoreProject request and ProjectController::update
        $updateData = [
            'category' => ['id' => 1, 'name' => 'Cat'],
            'categorySub' => ['id' => 1, 'name' => 'SubCat'],
            'profession' => [
                'id' => 1,
                'name' => 'Prof',
                'allTranslations' => ['title' => ['en' => 'New Prof Title']]
            ],
            'position' => [
                'id' => 1,
                'name' => 'Pos',
                'allTranslations' => ['title' => ['en' => 'New Pos Title']]
            ],
            'currency' => ['id' => 1, 'name' => 'USD'],
            'countryWork' => [
                'id' => 1,
                'name' => 'Country',
                'allTranslations' => ['en' => 'New Country Title']
            ],
            'cityWork' => 'New City',
            'basicSalaryFrom' => 1500,
            'basicSalaryTo' => 2500,
            'salary_type' => 'net',
            'salaryPeriod' => ['id' => 1, 'name' => 'month'],
            'workingMode' => ['id' => 1, 'name' => 'remote'],
            'typeOfContract' => ['id' => 1, 'name' => 'b2b'],
            'payoutMode' => ['id' => 1, 'name' => 'monthly'],
            'workingPlace' => ['id' => 1, 'name' => 'office'],
            'country' => ['id' => 1, 'name' => 'US'],
            'workLoad' => ['id' => 1, 'name' => 'full-time'],
            'shiftWork' => null,
            'paySystem' => null,
            'days' => null,
            'workNight' => false,
            'is_active' => true,
            'langs' => [],
            'detailProjects' => 'Some details',
            'experience' => 'Some exp',
            'welcome' => 'Welcome',
            'offer' => 'Offer',
            'wait' => 'Wait',
        ];

        $response = $this->put(route('projects.update', $project), $updateData);

        // 3. Assert
        $response->assertRedirect();
        $project->refresh();

        // The title is generated in the controller.
        // For 'en' it should look something like: "New Pos Title, New Country Title, New City, 1500 USD net / month"
        // Since we are checking if it UPDATED AT ALL (it currently doesn't), any change from 'Old Title' is a win.
        $this->assertNotEquals('Old Title', $project->title['en'] ?? null);
        $this->assertStringContainsString('New Pos Title', $project->title['en']);
        $this->assertStringContainsString('New City', $project->title['en']);
    }
}

<?php

namespace Tests\Feature\Project;

use App\Models\User;
use App\Rules\WorkingHoursTo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

/**
 * Godziny pracy: zmiana przez północ (np. 19:00-03:00) jest dozwolona tylko przy włączonej pracy nocnej.
 */
class WorkingHoursValidationTest extends TestCase
{
    use RefreshDatabase;

    private function errors(?string $from, ?string $to, int $workNight): array
    {
        $validator = Validator::make(
            ['hoursFrom' => $from, 'hoursTo' => $to, 'workNight' => $workNight],
            WorkingHoursTo::rules()
        );

        return $validator->errors()->toArray();
    }

    public function test_same_day_hours_pass_without_night_work(): void
    {
        $this->assertSame([], $this->errors('08:00', '16:00', 2));
        $this->assertSame([], $this->errors(null, null, 2));
        $this->assertSame([], $this->errors('08:00', null, 2));
    }

    public function test_overnight_shift_requires_night_work(): void
    {
        $this->assertSame([], $this->errors('19:00', '03:13', 1));

        $errors = $this->errors('19:00', '03:13', 2);
        $this->assertSame([__('workHours.overnightNeedsNightWork')], $errors['hoursTo']);
        $this->assertArrayNotHasKey('hoursFrom', $errors);
    }

    public function test_equal_hours_always_fail(): void
    {
        $this->assertSame([__('workHours.sameHours')], $this->errors('08:00', '08:00', 1)['hoursTo']);
        $this->assertArrayHasKey('hoursTo', $this->errors('08:00', '8:00', 1));
    }

    public function test_wizard_step_accepts_night_shift(): void
    {
        Role::findOrCreate('firm', 'web');
        Role::findOrCreate('recruit', 'web');
        $firm = User::factory()->create();
        $firm->assignRole('firm', 'recruit');

        $step = fn (int $workNight) => $this->actingAs($firm)->postJson(route('projects.validate-step'), [
            'step' => 2, 'hoursFrom' => '19:00', 'hoursTo' => '03:00', 'workNight' => $workNight,
        ])->json('errors') ?? [];

        $this->assertArrayNotHasKey('hoursTo', $step(1));
        $this->assertArrayNotHasKey('hoursFrom', $step(1));
        $this->assertArrayHasKey('hoursTo', $step(2));
    }
}

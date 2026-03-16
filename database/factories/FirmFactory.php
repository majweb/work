<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Firm>
 */
class FirmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'countryJson' => ['countryCode' => 'pl'],
            'nip' => $this->faker->numerify('##########'),
            'street' => $this->faker->streetName,
            'city' => $this->faker->city,
            'postal' => $this->faker->postcode,
            'country' => 'Poland',
        ];
    }
}

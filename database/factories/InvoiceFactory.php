<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'number' => $this->faker->unique()->numberBetween(1000, 9999),
            'day' => now()->day,
            'month' => now()->month,
            'year' => now()->year,
            'date_invoice' => now(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'pdf' => $this->faker->word.'.pdf',
        ];
    }
}

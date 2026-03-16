<?php

namespace Database\Factories;

use App\Enum\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => [
                'pl' => $this->faker->word,
                'en' => $this->faker->word,
            ],
            'points' => $this->faker->numberBetween(100, 10000),
            'price' => $this->faker->numberBetween(10, 1000),
            'active' => true,
            'type' => [
                'duration' => $this->faker->randomElement(['30 dni', '7 dni', 'NIELIMITOWANY']),
            ],
            'product_type' => $this->faker->randomElement(ProductType::cases()),
        ];
    }
}

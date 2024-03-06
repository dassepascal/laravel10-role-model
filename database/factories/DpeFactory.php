<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dpe>
 */
class DpeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dpeValue' => $this->faker->numberBetween(10, 100),
            'gesValue' => $this->faker->numberBetween(10, 100),
            'product_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}

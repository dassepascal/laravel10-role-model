<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),

            'description' => $this->faker->text,
            'surface' => $this->faker->numberBetween(20, 300),
            'rooms' => $this->faker->numberBetween(1, 10),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'floor' => $this->faker->numberBetween(0, 15),
            'price' => $this->faker->numberBetween(10000, 1000000),
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'postal_code' => $this->faker->postcode,
            'sold' => $this->faker->boolean,
            // utiliser les images stocké  dans public  storage


            'image' => Storage::url('public/storage/productsImage/public/storage/productImage/7MNehNPlpfVEiywwWrD4vYWQFYhS88vowu9tvIIL.jpg'),
        ];
    }
}

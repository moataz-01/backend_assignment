<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
            'Name' => fake()->paragraph(1),
            'Price' => mt_rand(10*10, 1000*10) / 10,
            'Quantity' => random_int(1, 500),
            'description' => fake()->paragraph()
        ];
    }
}

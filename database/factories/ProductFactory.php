<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => fake()->name(),
            'price' => fake()->numberBetween(10, 100),
            'image' => fake()->imageUrl(),
            'description' => fake()->sentence(),
            'stock' => fake()->numberBetween(1, 100),
            'is_favorite' => fake()->randomElement([true,false]),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
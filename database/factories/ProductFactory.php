<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            //
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->randomNumber(3),
            'quantity' => fake()->randomNumber(2),
            'discount_percentage' => fake()->numberBetween(0, 30),
            'image' => fake()->imageUrl(),
            'category_id' => Category::pluck('id')->random(),

        ];
    }
}

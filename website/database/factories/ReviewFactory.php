<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(),
            'name' => fake()->name(),
            'preview_image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'content' => fake()->text(),
            'user_id' => fake()->numberBetween(),
        ];
    }
}

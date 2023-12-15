<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_comment = Comment::count();
        $random_number = fake()->randomNumber(1);

        if ($num_comment >0 and $random_number < 3){
            return [
                'content' => fake()->text(),
                'review_id' => Comment::all()->random()->id,
                'user_id' => Comment::all()->random()->id,
                'parent_id' => Comment::all()->random()->id
            ];
        }
        else{
            return [
                'content' => fake()->text(),
                'review_id' => 0,
                'user_id' => 0,
                'parent_id' => 0
            ];
        }
    }
}

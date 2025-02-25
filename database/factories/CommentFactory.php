<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Vinyles;



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
        return [
            'content'=> fake()->text(),
            'user_id'=> User::factory(),
            'vinyles_id'=> Vinyles::factory(),
            'created_at'=> fake()->date(),
            'updated_at'=> fake()->date(),
        


        ];
    }
}

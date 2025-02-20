<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;
use App\Models\Comment;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vinyles>
 */
class VinylesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img'=> fake()->imageUrl(),
            'title'=> fake()->name(),
            'release_year'=>fake()->date(),
            'label'=> fake()->name(),
            'description'=> fake()->text(),
            'artist_id'=> Artist::factory(),
            


        ];
    }
}

<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Artist;
use App\Models\Comment;
use App\Models\MusicGenre;
use App\Models\Vinyles;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Artist::factory(10)->create();
        Comment::factory(10)->create();
        MusicGenre::factory(10)->create();
        // Vinyles::factory(10)->create();




        // php artisan db:seed

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

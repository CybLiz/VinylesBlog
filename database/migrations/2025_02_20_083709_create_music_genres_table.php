<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('music_genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        Schema::create('genre_vinyl', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Vinyles::class, "vinyles_id")->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\MusicGenre::class, "genre_id")->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_genres');
        Schema::dropIfExists('genre_vinyl');

    }
};

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
        Schema::create('vinyl', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->timestamp('release_year');
            $table->string('label');
            $table->string('description');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            // $table->unsignedBigInteger('artist_id');
            $table->foreignIdFor(\App\Models\Artist::class)->constrained()->name('artist_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinyl');
    }
};

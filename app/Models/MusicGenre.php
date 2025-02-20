<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicGenre extends Model
{
    /** @use HasFactory<\Database\Factories\MusicGenreFactory> */
    use HasFactory;
    protected $fillable = ["name"];

    public function vinyles(){
        return $this->belongsToMany(Vinyles::class);
    }
    
}

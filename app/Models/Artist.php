<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;
    protected $fillable = ["name", "country", "birth_year"];

    
    public function vinyles(){
        return $this->hasMany(Vinyles::class);
    }

}

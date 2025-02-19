<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;
    protected $fillable = ["author", "isKnown"];

    
    public function vinyles(){
        return $this->hasMany(Vinyles::class);
    }

}

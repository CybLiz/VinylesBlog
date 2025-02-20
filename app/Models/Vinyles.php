<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Vinyles extends Model
{
    use HasFactory;
    protected $table ="vinyl";
    protected $fillable = ["img","title","release_year","label","description"];

    // Chercher a quel artiste appartient ce titre "vinyle"

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function musicGenre(){
        return $this->belongsToMany(MusicGenre::class);
    }
    
    
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
    
    
   
    
    
};


// class Vinyles 
// {
//     public static function all(): array 
// {
//     return [
//         [
//             'id' => 1,
//             'name' => 'The Wall',
//             'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNrErewJ6o4TEivfDri0UD3OptY-3oD_DMVg&s',
//             'author' => 'Pink Floyd',
//         ],
//         [
//             'id' => 2,
//             'name' => 'Abbey Road',
//             'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaGnN-VEK5dceeMKEfoz-nodqlFVQee98HPg&s',
//             'author' => 'The Beatles',
//         ],
//         [
//             'id' => 3,
//             'name' => 'Thriller',
//             'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCrVb_H0DzN1BSiXCKQDgUuVbGmOFE3VjqTA&s',
//             'author' => 'Michael Jackson',
//         ],
      
    
//     ];
// }


//     public static function find($id)
//     {
//         $vinyle = Arr::first(Vinyles::all(), fn($vinyle) => $vinyle['id'] == $id);
//         return $vinyle;
//     }
// }

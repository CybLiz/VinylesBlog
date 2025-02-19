<?php

namespace App\Models;
use Illuminate\Support\Arr;


class Vinyles 
{
    public static function all(): array 
    {
        return [
            [
                'id' => 1,
                'name' => 'The Dark Side of the Moon',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNrErewJ6o4TEivfDri0UD3OptY-3oD_DMVg&s',
                'author' => 'Pink Floyd',
            ],
            [
                'id' => 2,
                'name' => 'Abbey Road',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaGnN-VEK5dceeMKEfoz-nodqlFVQee98HPg&s',
                'author' => 'The Beatles',
            ],
            [
                'id' => 3,
                'name' => 'Thriller',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCrVb_H0DzN1BSiXCKQDgUuVbGmOFE3VjqTA&s',
                'author' => 'Michael Jackson',
            ],
            

          
        ];
    }

    public static function find($id)
    {
        $vinyle = Arr::first(Vinyles::all(), fn($vinyle) => $vinyle['id'] == $id);
        return $vinyle;
    }
}

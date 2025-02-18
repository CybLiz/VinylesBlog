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
                'img' => 'https://static.fnac-static.com/multimedia/Images/FR/NR/4a/91/5e/6197578/1540-1/tsp20180928084517/Les-100-vinyls-incontournables-premier-45-tours-Elvis-Presley-inclus.jpg',
                'author' => 'Pink Floyd',
            ],
            [
                'id' => 2,
                'name' => 'Abbey Road',
                'img' => 'https://static.fnac-static.com/multimedia/Images/FR/NR/4a/91/5e/6197578/1540-1/tsp20180928084517/Les-100-vinyls-incontournables-premier-45-tours-Elvis-Presley-inclus.jpg',
                'author' => 'The Beatles',
            ],
            [
                'id' => 3,
                'name' => 'Thriller',
                'img' => 'https://static.fnac-static.com/multimedia/Images/FR/NR/4a/91/5e/6197578/1540-1/tsp20180928084517/Les-100-vinyls-incontournables-premier-45-tours-Elvis-Presley-inclus.jpg',
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

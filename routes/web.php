<?php

use App\Models\Artist;
use Illuminate\Support\Facades\Route;
use App\Models\Vinyles;
use App\Models\Comment;


use function Pest\Laravel\get;

Route::get('/home', function () {
    // return view('home', ['vinyles' => vinyles::all()]);


    // Récupère tous les vinyles avec leurs relations (ici artists)
    // $vinyles = Vinyles::with('artist')->get();

    $vinyles = Vinyles::with('artist')->paginate(3);
    return view('home', ['vinyles' => $vinyles]);
});

Route::get(
    '/vinyles/{id}',
    function ($id) {
        // $vinyle = Vinyles::find($id);
        // $comments = Comment::all();

        $vinyle = Vinyles::with('comment')->find($id);
        return view('vinyle', ['vinyle' => $vinyle]);
    }
);

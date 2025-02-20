<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyles;
use Illuminate\Http\Request;





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

Route::get('/addvinyl', function () {
    return view('addVinyl');
});

Route::post('/addvinyl', function (Request $request) {

    $request->validate([
        'img' => 'string',
        'title' => 'required|string|max:255',
        'release_year' => 'required|integer',
        'label' => 'required|string|max:255',
        'description' => 'required|string',
        'artist_id' => 'required|string',


    ]);

    Vinyles::create([

        'img' => $request->input('img'),
        'title' => $request->input('title'),
        'release_year' => $request->input('release_year'),
        'label' => $request->input('label'),
        'description' => $request->input('description'),
        'artist_id' => $request->input('artist_id'),
    ]);

    return redirect('/home')->with('success', 'Vinyle ajouté avec succès !');
});

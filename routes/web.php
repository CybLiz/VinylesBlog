<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyles;


Route::get('/home', function () {
    return view('home', ['vinyles' => vinyles::all()]);
});

Route::get('/vinyles/{id}', function ($id)
{
    $vinyle = Vinyles::find($id);

    return view('vinyle', ['vinyle' => $vinyle]);
}
);

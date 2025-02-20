<?php

namespace App\Http\Controllers;
use App\Models\Vinyles;

use Illuminate\Http\Request;

class vinyleController extends Controller
{

    public function vinyles(){
    $vinyles = Vinyles::with('artist')->paginate(3);
    return view('home', ['vinyles' => $vinyles]);
    }

    public function vinyle($vinyle){
        $vinyle = Vinyles::with('comment')->find($vinyle);
        return view('vinyle', ['vinyle' => $vinyle]);
    }


    public function newVinyle(Request $request){

        
    $request->validate([
        'img' => 'string',
        'title' => 'required|string|max:255',
        'release_year' => 'required|integer',
        'label' => 'required|string|max:255',
        'description' => 'required|string',
        'artist_id' => 'string',


    ]);

    Vinyles::create([

        'img' => $request->input('img'),
        'title' => $request->input('title'),
        'release_year' => $request->input('release_year'),
        'label' => $request->input('label'),
        'description' => $request->input('description'),
        'artist_id' => $request->input('artist_id'),
    ]);
    
    $vinyles = Vinyles::latest()->get(); 
    return redirect('/home')->with('success', 'Vinyle ajouté avec succès !')->with('vinyles', $vinyles);;
    }

    

};

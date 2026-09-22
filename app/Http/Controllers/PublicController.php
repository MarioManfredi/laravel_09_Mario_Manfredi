<?php

namespace App\Http\Controllers;

use App\Models\Servizi;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        return view('welcome');
    }

    public function submit(Request $request){
        
        $name = $request->name;
        $genere = $request->genere;
        $produttore = $request->produttore;
        $messaggio = $request->messaggio;

        $videogame = new Servizi();
        $videogame->name = $name;
        $videogame->genere = $genere;
        $videogame->produttore = $produttore;
        $videogame->messaggio = $messaggio;

        $videogame->save();

        return redirect()->back();
    }

    public function show(){

        $videogames = Servizi::all();

        return view('cardGame', ['videogames'=>$videogames]);
    }
    
}

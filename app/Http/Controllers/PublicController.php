<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideogameRequest;
use App\Models\Servizi;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        return view('welcome');
    }

    public function submit(VideogameRequest $request){
        
        $name = $request->name;
        $genere = $request->genere;
        $produttore = $request->produttore;
        $messaggio = $request->messaggio;
        $img = null;

        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }

        $videogame = new Servizi();
        $videogame->name = $name;
        $videogame->genere = $genere;
        $videogame->produttore = $produttore;
        $videogame->messaggio = $messaggio;
        $videogame->img = $img;

        $videogame->save();

        return redirect()->route('homepage')->with('message', 'Inserito commento sul videogioco!');
    }

    public function show(){

        $videogames = Servizi::all();

        return view('cardGame', ['videogames'=>$videogames]);
    }

    public function create(){

        return view('videogameCreate');
    }

}

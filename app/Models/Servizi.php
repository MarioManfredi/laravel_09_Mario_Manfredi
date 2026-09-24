<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Servizi extends Model
{
    use Hasfactory;
    // Ho specificato il nome della tabella perchè' laravel mi dava errore nella conversione del nome della tabella in inglese e non me la trovava quando cliccavo il bottone dell'invio del form.
    protected $table = 'servizi';

    protected $fillable = [
        'name',
        'genere',
        'produttore',
        'messaggio',
        'img',
    ];
}

<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::post('/videogioco/create', [PublicController::class, 'submit'])->name('videogame');

Route::get('/videogame', [PublicController::class, 'show'])->name('show');
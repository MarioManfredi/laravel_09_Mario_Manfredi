<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/videogioco/create', [PublicController::class, 'create'])->name('videogameCreate');
Route::post('/videogioco/submit', [PublicController::class, 'submit'])->name('videogame');
Route::get('/videogame', [PublicController::class, 'show'])->name('show');
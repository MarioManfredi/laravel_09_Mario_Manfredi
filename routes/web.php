<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/videogioco/create', [VideogameController::class, 'create'])->name('videogioco.create');
Route::post('/videogioco/submit', [VideogameController::class, 'submit'])->name('videogioco.submit');
Route::get('/videogioco/list', [VideogameController::class, 'list'])->name('videogioco.list');
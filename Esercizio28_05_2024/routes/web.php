<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/genre', [AnimeController::class,'genre_index'])->name('genre_index');

Route::get('/genre/{id}', [AnimeController::class,'animeByGenre'])->name('animeByGenre');

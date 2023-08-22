<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::resource('movies', MovieController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function(){
    return view('login');
});
 
Route::get("/movies/index", function(){
    return view('index');
});
Route::get('/movie/index', [MovieController::class, 'index'])->name('home');
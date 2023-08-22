<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::resource('movies', MovieController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function(){
    return view('login');
});

Route::get('/auth/register', function(){
    return view('register');
});

Route::get('/movie/index', [MovieController::class, 'index'])->name('home');

Route::get('/auth/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [UserController::class, 'register'])->name('register.post');
Route::get('/auth/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [UserController::class, 'login'])->name('login.post');
Route::post('/auth/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/auth/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);
Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'register']);


Route::get('/auth/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login']);

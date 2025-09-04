<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chef', [PrincipalController::class, 'chef'])->name('chef');
Route::get('/card', [PrincipalController::class, 'card'])->name('card');
Route::get('/profile', [PrincipalController::class, 'profile'])->name('profile');

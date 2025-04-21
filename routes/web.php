<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return redirect()->route('login'); // Redirect to login page
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister']); // Add name here
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::resource('posts', PostController::class)->middleware('auth');





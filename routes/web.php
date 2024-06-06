<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');;

Route::get('/logout', [AuthController::class, 'logout']);
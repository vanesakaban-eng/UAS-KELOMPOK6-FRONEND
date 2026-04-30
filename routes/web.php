<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// HOME
Route::get('/', function () {
    return view('home');
});

// SIGN UP
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [AuthController::class, 'register']);

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// LOGOUT (PAKAI GET BIAR SIMPLE & GA ERROR)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// DASHBOARD (WAJIB LOGIN)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Models\Notification;

// HOME
Route::get('/', function () {
    return view('home');
});

// SIGNUP
Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', [AuthController::class, 'register']);

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

// LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// PAGE
Route::get('/assistant', function () {
    return view('assistant');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/more', function () {
    return view('more');
});

// QUIZ
Route::get('/quiz/perencanaan', function () {
    return view('quiz.perencanaan');
});

Route::get('/quiz/analisis', function () {
    return view('quiz.analisis');
});

Route::get('/quiz/teknologi', function () {
    return view('quiz.teknologi');
});

// REWARD
Route::post('/reward', function(Request $request){

    $user = auth()->user();

    $user->reward_point += $request->point;

    $user->save();

    return response()->json([
        'success' => true
    ]);

})->middleware('auth');

// NOTIFIKASI
Route::post('/add-notification', function(Request $request){

    Notification::create([

        'user_id' => auth()->id(),

        'message' => $request->message

    ]);

    return response()->json([
        'success' => true
    ]);

})->middleware('auth');
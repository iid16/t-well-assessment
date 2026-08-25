<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman profil peneliti
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Proses Assessment Code
Route::post('/assessment', [AssessmentController::class, 'show'])
    ->name('assessment.show');

Route::view('/peneliti/personalisasi-algoritma', 'personalization')->name('personalization');
Route::view('/peneliti/screen-time-digital-wellbeing', 'screen-wellbeing')->name('screen.wellbeing');
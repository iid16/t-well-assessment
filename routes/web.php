<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SelfAssessmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =========================================================
// HALAMAN UTAMA
// =========================================================

Route::get('/', function () {
    return view('welcome');
})->name('home');


// =========================================================
// PROFIL PENELITI
// =========================================================

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


// =========================================================
// HALAMAN PENJELASAN VARIABEL
// =========================================================

Route::view(
    '/peneliti/personalisasi-algoritma',
    'personalization'
)->name('personalization');

Route::view(
    '/peneliti/screen-time-digital-wellbeing',
    'screen-wellbeing'
)->name('screen.wellbeing');


// =========================================================
// AUTHENTICATION
// =========================================================

// Register
Route::get('/register', [AuthController::class, 'showRegister'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest');


// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


// =========================================================
// DASHBOARD
// =========================================================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


// =========================================================
// SELF-ASSESSMENT
// =========================================================

Route::middleware('auth')->group(function () {
    Route::get('/self-assessment', [SelfAssessmentController::class, 'create'])
        ->name('self-assessment.create');

    Route::post('/self-assessment', [SelfAssessmentController::class, 'store'])
        ->name('self-assessment.store');
});


// =========================================================
// ASSESSMENT CODE
// =========================================================

Route::post('/assessment', [AssessmentController::class, 'show'])
    ->name('assessment.show');

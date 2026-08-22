<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/assessment', [AssessmentController::class, 'show'])
    ->name('assessment.show');

Route::get('/result', function () {
    return view('result');
});
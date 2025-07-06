<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::resource('/', loginController::class)->names('login');


Route::get('/google', [loginController::class, 'google'])->name('google');

Route::get('/home', function () {
    return view('home');
})->name('home');

require __DIR__ . '/auth.php';

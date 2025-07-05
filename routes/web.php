<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/google', function () {
    return view('google');
})->name('google');

Route::get('/home', function () {
    return view('home');
})->name('home');

require __DIR__ . '/auth.php';

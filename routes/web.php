<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('index');
});


Route::get('/signup', [SignupController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
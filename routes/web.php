<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class,"login"]);

Route::post('/login', [UserController::class,"login_user"])->name("login_user");

Route::get('/register', [UserController::class,"register"]);

Route::post('/register', [UserController::class,"register_user"])->name("register_user");

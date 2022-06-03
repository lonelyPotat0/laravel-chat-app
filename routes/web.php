<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [HomeController::class , 'index' ])->name('home');

Route::get('/login', [AuthController::class , 'login' ])->name('login');

Route::post('/login', [AuthController::class , 'loginUser' ]);

Route::get('/signup', [AuthController::class , 'signup' ])->name('signup');

Route::post('/signup', [AuthController::class , 'createUser' ]);
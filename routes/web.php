<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Middleware\EnsureTokenIsValid;

Route::get('/', [IndexController::class, 'index']);
// authen
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::middleware(EnsureTokenIsValid::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(EnsureTokenIsValid::class,'admin_check');

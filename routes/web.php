<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

// admin
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;

// Route::get('/', function () {
//     return view('welcome');
// });
// middleware
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AdminAuthenticate;

Route::get('/', [IndexController::class, 'index']);
// authen
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::middleware(Authenticate::class)->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
});


// admin
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::middleware(AdminAuthenticate::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/categories', [AdminController::class, 'categories']);

    Route::get('/admin/products', [AdminController::class, 'products']);
    Route::get('/admin/products/add', [AdminController::class, 'add_products']);
    Route::post('/admin/products/add', [AdminController::class, 'add_products_post']);
    Route::get('/admin/logout', [AdminLoginController::class, 'logout']);

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/profile', function () {
        return view('admin.profile');
    });
});

// Route::get('/admin', [AdminController::class, 'index']);

// Route::get('/admin', function () {
//     return view('admin');
// })->middleware(EnsureTokenIsValid::class,'admin_check');

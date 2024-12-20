<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;

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

Route::get('/products/{category_id?}',[ProductsController::class,'index']);

Route::get('/p/{product_id?}',[ProductsController::class,'product_detail']);

Route::get('/cart',[CartController::class,'index']);

Route::middleware(Authenticate::class)->group(function () {

    Route::post('/add_cart', [CartController::class, 'add_cart']);
    Route::post('/remove_cart', [CartController::class, 'remove_cart']);
    Route::post('/update_cart', [CartController::class, 'update_cart']);

    Route::get('/checkout', [CartController::class, 'checkout']);
    Route::post('/checkout', [CartController::class, 'checkout_post']);

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
    Route::get('/admin/add_category', [AdminController::class, 'add_category']);
    Route::post('/admin/add_category', [AdminController::class, 'add_category_post']);
    Route::get('/admin/del_category/{category_id?}', [AdminController::class, 'del_category']);
    Route::get('/admin/update_category/{category_id?}', [AdminController::class, 'update_category']);
    Route::post('/admin/update_category', [AdminController::class, 'update_category_post']);

    Route::get('/admin/products', [AdminController::class, 'products']);
    Route::get('/admin/add_product', [AdminController::class, 'add_product']);
    Route::post('/admin/add_product', [AdminController::class, 'add_product_post']);
    Route::get('/admin/del_product/{product_id?}', [AdminController::class, 'del_product']);
    Route::get('/admin/update_product/{product_id?}', [AdminController::class, 'update_product']);
    Route::post('/admin/update_product', [AdminController::class, 'update_product_post']);


    Route::get('/admin/product_variants', [AdminController::class, 'product_variants']);
    Route::get('/admin/add_product_variant/{product_id?}', [AdminController::class, 'add_product_variant']);
    Route::post('/admin/add_product_variant', [AdminController::class, 'add_product_variant_post']);
    Route::get('/admin/del_product_variant/{product_variant_id?}', [AdminController::class, 'del_product_variant']);
    Route::get('/admin/update_product_variant/{product_variant_id?}', [AdminController::class, 'update_product_variant']);
    Route::post('/admin/update_product_variant', [AdminController::class, 'update_product_variant_post']);

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

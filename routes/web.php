<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/about', function () {
    return view('about' );    
});

Route::get('/contact', function () {
    return view('contact' );    
});

Route::get('/checkout', function () {
    return view('checkout' );    
});

Route::get('/order-complete', function () {
    return view('order-complete' );    
});

Route::get('/wishlist', function () {
    return view('add-to-wishlist' );    
});

Route::get('/login', function () {
    return view('login' );    
});

Route::get('/signup', function () {
    return view('signup' );    
});


Route::post('/signup', [AccountController::class , 'signup']);
Route::post('/login ', [AccountController::class , 'login'])->name('login');
Route::get('/logout', [AccountController::class , 'getLogOut'])->name('logout');


Route::get('/',[ProductController::class , 'displayAll']);
Route::get('/men',[ProductController::class , 'displayMale']);
Route::get('/women',[ProductController::class , 'displayFemale']);


Route::get('/product-detail', [ProductController::class , 'findProduct']);
Route::post('/addcart', [ProductController::class , 'addToCart']);

Route::get('/cart', [ProductController::class , 'getCart']);

Route::post('/checkout', [ProductController::class , 'getCheckOut']);


Route::post('/transaction', [ProductController::class , 'setTransaction']);

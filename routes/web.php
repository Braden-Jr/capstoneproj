<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/men', function () {
    return view('men' );    
});

Route::get('/women', function () {
    return view('women' );    
});

Route::get('/about', function () {
    return view('about' );    
});

Route::get('/contact', function () {
    return view('contact' );    
});

Route::get('/cart', function () {
    return view('cart' );    
});

Route::get('/product-detail', function () {
    return view('product-detail' );    
});

Route::get('/checkout', function () {
    return view('checkout' );    
});

Route::get('/order-complete', function () {
    return view('order-complete' );    
});

Route::get('/add-to-wishlist', function () {
    return view('add-to-wishlist' );    
});

Route::get('/login', function () {
    return view('login' );    
});

Route::get('/signup', function () {
    return view('signup' );    
});


<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
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

Route::get('/userprofile', function () {
    return view('userprofile' );    
});

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

Route::get('/userLogin', function () {
    return view('userlogin' );    
});

Route::get('/adminlogin', function () {
    return view('adminlogin' );    
});


Route::get('/admin/sales', function () {
    return view('sales' );    
});


Route::get('/signup', function () {
    return view('signup' );    
});

Route::get('/admin/profile', function () {
    return view('profile' );    
});

Route::get('/ecart', function (){
    return view('ecart');
});


Route::post('/signup', [AccountController::class , 'signup']);
Route::post('/userLogin ', [AccountController::class , 'userLogin'])->name('userLogin');
Route::post('/adminLogin ', [AccountController::class , 'adminLogin'])->name('adminLogin');
Route::get('/logout', [AccountController::class , 'getLogOut'])->name('logout');
Route::get('/adminlogout', [AccountController::class , 'adminLogout'])->name('adminlogout');

Route::get('/',[ProductController::class , 'displayAll']);
Route::get('/men',[ProductController::class , 'displayMale']);
Route::get('/women',[ProductController::class , 'displayFemale']);
Route::get('/admin/stocks',[AdminController::class , 'displayAll']);
Route::get('/admin/useraccounts',[AdminController::class , 'allClient']);

Route::get('/admin/sales',[AdminController::class , 'allTransaction']);
Route::get('/admin/adminaccounts',[AdminController::class , 'allAdmin']);
Route::get('/admin/stockhistory',[AdminController::class , 'allStockHis']);
Route::post('/updatestocks ', [AdminController::class , 'updateStock'])->name('updatestock');
Route::post('/updateclient ', [AdminController::class , 'updateClient'])->name('updateclient');
Route::post('/deleteclient ', [AdminController::class , 'deleteClient'])->name('deleteClient');
Route::post('/adminsignup ', [AdminController::class , 'adminSignup'])->name('adminsignup');
Route::get('/admin/dashboard',[AdminController::class , 'dashboard']);

Route::get('/product-detail', [ProductController::class , 'findProduct']);
Route::post('/addcart', [ProductController::class , 'addToCart']);

Route::get('/cart', [ProductController::class , 'getCart']);

Route::post('/checkout', [ProductController::class , 'getCheckOut']);


Route::post('/transaction', [ProductController::class , 'setTransaction']);
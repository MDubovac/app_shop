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

/* Common Routes */ 
Route::get('/product-list', 'CommonController@productList' );

Route::get('/product-details/{product}', 'CommonController@productDetails' )->name('product-details');

Route::get('/', function () {
    return view('common.index');
});

Route::get('/home', function() {
    return view('common.index');
});

Route::get('/about', function() {
    return view('common.about');
});

Route::get('/contact', function() {
    return view('common.contact');
});


Auth::routes();

/* Admin Routes */
Route::middleware(['auth', 'admin'])->group(function (){
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UsersController');
});


/* Cart Routes */
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/cart', 'CartController@store')->middleware('auth');
Route::delete('/cart/{id}', 'CartController@destroy')->middleware('auth');
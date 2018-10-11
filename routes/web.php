<?php

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


Route::get('/', 'LandingPageController@index')->name('home');
Route::get('/products', 'ProductsPageController@index')->name('products');
Route::get('/products/{product}', 'ProductsPageController@show')->name('single-product');
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@store')->name('add-to-cart');

/* Route::view('/products', 'products');
Route::view('/product', 'product');
Route::view('cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
Route::view('/', 'main'); */

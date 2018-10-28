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
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('update-cart');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::post('/checkout/send', 'CheckoutController@store')->name('checkout-send');
Route::get('/thankyou', 'CheckoutController@confirm')->name('confirm-purchase');

Route::post('/coupon', 'CouponsController@store')->name('add-coupon');
Route::delete('/coupon', 'CouponsController@destroy')->name('remove-coupon');




Route::get('test', 'TestPAgeController@index');
Route::get('empty', function() {
    Cart::destroy();
});
/* Route::view('/products', 'products');
Route::view('/product', 'product');
Route::view('cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
Route::view('/', 'main'); */


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

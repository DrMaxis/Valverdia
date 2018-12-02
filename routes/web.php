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
Route::get('/', 'LandingPageController@index')->name('front-page');

Route::get('/products', 'ProductsPageController@index')->name('products');
Route::get('/search', 'ProductsPageController@search')->name('search');
Route::get('/products/{product}', 'ProductsPageController@show')->name('single-product');
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@store')->name('add-to-cart');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('update-cart');
Route::get('/checkout', 'CheckoutController@index')->name('checkout')->middleware('auth');
Route::post('/checkout/send', 'CheckoutController@store')->name('checkout-send');
Route::post('/paypalcheckout', 'CheckoutController@paypalCheckout')->name('paypal-checkout');
Route::get('/guestcheckout', 'CheckoutController@index')->name('guest-checkout');
Route::get('/thankyou', 'CheckoutController@confirm')->name('confirm-purchase');

Route::post('/coupon', 'CouponsController@store')->name('add-coupon');
Route::delete('/coupon', 'CouponsController@destroy')->name('remove-coupon');

Route::get('/about', 'AboutUsController@index')->name('about');
Route::get('/blog', 'BlogController@index')->name('blog');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'UsersController@edit')->name('dashboard');
    Route::patch('/dashboard', 'UsersController@update')->name('update-accountcred');
    Route::get('/orders', 'OrdersController@index')->name('orders');
    Route::get('/orders/{order}', 'OrdersController@show')->name('show-order');
});
//Route::get('/dashboard', 'UsersController@index')->name('dashboard')->middleware('auth');

Route::get('test', 'TestPAgeController@index');
Route::get('empty', function () {
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

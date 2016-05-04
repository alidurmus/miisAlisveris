<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
 * Auth & Profile
 */
Route::auth();
Route::get('profile', 'ProfileController@index');

Route::get('profile/newAddress', 'ProfileController@newAddress');
Route::post('profile/createAddress', 'ProfileController@createAddress');
Route::get('profile/showAddress/{id}', 'ProfileController@showAddress');
Route::post('profile/updateAddress', 'ProfileController@updateAddress');
Route::get('profile/deleteAddress/{id}', 'ProfileController@deleteAddress');

/*
 * Main routes 
 */
Route::get('/', 'HomeController@index');
Route::get('category/{slug}', 'CategoryController@index');
Route::get('product/{slug}', 'ProductController@index');
/*
 * Cart 
 */
Route::post('cart/add', 'CartController@add');
Route::post('cart/update', 'CartController@update');
Route::get('cart/remove/{rowID}', 'CartController@remove');
Route::get('cart', 'CartController@index');
/*
 * Checkout 
 */
Route::get('checkout', 'CheckoutController@index');
Route::post('checkout/checkform', 'CheckoutController@checkForm');
Route::get('checkout/step2', 'CheckoutController@step2');
/*
 * Currency
 */
Route::get('currency/update/{currencyID}', 'CurrencyController@update');


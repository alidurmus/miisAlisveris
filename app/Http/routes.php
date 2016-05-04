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
Route::auth();
Route::get('/', 'HomeController@index');
Route::get('currency/update/{currencyID}', 'CurrencyController@update');

Route::get('category/{slug}', 'CategoryController@index');
Route::get('product/{slug}', 'ProductController@index');
Route::post('cart/add', 'CartController@add');
Route::post('cart/update', 'CartController@update');
Route::get('cart/remove/{rowID}', 'CartController@remove');
Route::get('cart', 'CartController@index');
Route::get('checkout', 'CheckoutController@index');
Route::post('checkout/checkform', 'CheckoutController@checkForm');
Route::get('checkout/step2', 'CheckoutController@step2');


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

Route::get('cart','CartController@cartData');
Route::get('cart/add/{id}','CartController@addToCart');
Route::get('cart/edit/{id}','CartController@editCart');
Route::put('cart/update/{id}','CartController@updateCart');
Route::get('cart/delete/{id}','CartController@deleteFromCart');

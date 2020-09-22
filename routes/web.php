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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/category/{cat}', 'ProductController@showCategory')->name('showCategory');
Route::get('/category/{cat}/{product_id}', 'ProductController@show')->name('showProduct');
Route::get('/cart', 'CartController@index')->name('cartIndex');

Route::post('/add-to-cart', 'CartController@addToCart')->name('addToCart');



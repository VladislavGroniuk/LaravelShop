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

Route::get('/', 'HomeController@index');
Route::get('/{cat}', 'ProductController@showCategory')->name('showCategory');
Route::get('/{cat}/{product_id}', 'ProductController@show')->name('showProduct');



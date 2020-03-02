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
Route::get('/home', 'HomeController@index');

Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store');
Route::get('/product/create', 'ProductsController@create')->middleware('verified');
Route::get('/product/{product}/delete', 'ProductsController@delete')->name('product.delete');
Route::get('/product/{product}', 'ProductsController@show')->name('product.show');
Route::get('/product/{product}/edit', 'ProductsController@edit');
Route::put('/product/{product}', 'ProductsController@update');
Route::get('/account', 'UserController@show')->middleware('auth');
Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


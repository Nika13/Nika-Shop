<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('home', 'HomeController@postIndex');
Route::get('/', 'BaseController@getindex');
Route::get('/home/delete/{id}', 'HomeController@getDelete');
Route::get('/home/edit/{id}', 'HomeController@getEdit');
Route::post('/home/edit/{id}', 'HomeController@postEdit');
Route::get('order/cart', 'OrderController@getCart');
Route::get('order/{id}', 'OrderController@getIndex');
// всегда в конце файла
// default route
Route::get('/{id}', 'BaseController@getStatic');

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
Auth::routes();

Route::get('/homepage', 'HomeController@index')->name('homepage');
Route::get('/', 'HomeController@index');
Route::get('user', 'UserController@getIndex')->name('user');
Route::post('user/update/{id}','UserController@updateUser')->name('user.update');
Route::get('/logout','HomeController@index')
?> `
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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('user', 'UserController@getIndex')->name('user');
Route::post('user/update/{id}','UserController@updateUser')->name('user.update');
Route::get('/logout','HomeController@index');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/category/{id}','HomeController@category')->name('category');
Route::get('/article/{id}','HomeController@post')->name('post')
?>
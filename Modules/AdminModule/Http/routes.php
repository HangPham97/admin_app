<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\AdminModule\Http\Controllers'], function()
{
    Route::any('table','DatatableController@apiTable')->name('table');
    Route::get('/index','WebController@getChart')->name('admin.home');
    Route::get('/news', 'NewsController@index')->name('news.home');;
    Route::get('edit/{id}','NewsController@edit')->name('edit');
    Route::post('update/{id}', 'NewsController@update')->name('news.update');
    Route::get('create','NewsController@create')->name('news.create');
    Route::post('store','NewsController@store')->name('news.store');
    Route::get('categoryTable','DatatableController@cateDatatable')->name('admin.category');
    Route::get('/category','CategoryController@show')->name('cate.home');
    Route::get('create/category','CategoryController@create')->name('cate.create');
    Route::post('store/category','CategoryController@store')->name('cate.store');
    Route::get('delete/{id}','NewsController@delete')->name('delete');
    Route::get('delete/category/{id}','CategoryController@delete')->name('cate.delete');
    Route::get('edit/Category/{id}','CategoryController@edit')->name('cate.edit');
    Route::post('update/Category/{id}','CategoryController@update')->name('cate.update');
    Route::get('test','WebController@test');
});
?>
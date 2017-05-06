<?php
Route::get('','App\HomeController@index');
Route::get('info/{id}','App\HomeController@info')->name('home.info');
Route::get('admin','Admin\AdminController@index')->name('admin');
Route::post('admin/add','Admin\AdminController@getdata')->name('admin.add');
Route::post('admin/error','Admin\AdminController@error')->name('admin.error');

<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('app.home.index');
});
Route::get('home','App\HomeController@index');
Route::get('info/{id}','App\HomeController@info')->name('home.info');
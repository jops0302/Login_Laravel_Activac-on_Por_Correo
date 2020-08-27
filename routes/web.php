<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('activate/{token}', 'ActivationTokenController@activate')->name('activation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

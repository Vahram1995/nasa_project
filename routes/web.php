<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::get('chat', 'ChatController@chat');
Route::post('send', 'ChatController@send');
Route::get('send', 'ChatController@send');
Route::get('/home', 'HomeController@index')->name('home');


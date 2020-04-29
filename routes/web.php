<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', 'ContactController@index');
Route::get('/create', 'ContactController@create');
Route::post('/store', 'ContactController@store');
Route::get('/{contact}/edit', 'ContactController@edit');
Route::post('/update/{contact}', 'ContactController@update');
Route::get('/delete/{id}','ContactController@destroy') ;
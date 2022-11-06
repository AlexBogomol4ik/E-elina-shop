<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('index');
Route::get('/sign', 'MainController@sign')->name('sign');
Route::get('/{category}', 'MainController@category')->name('category');




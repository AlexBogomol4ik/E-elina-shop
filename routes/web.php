<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('index');
Route::get('/sign', 'MainController@sign')->name('sign');
Route::get('/cart', 'BasketController@cart')->name('cart');
Route::get('/cart/place', 'BasketController@cartPlace')->name('cart-place');
Route::post('/cart/add/{id}', 'BasketController@cartAdd')->name('cart-add');
Route::post('/cart/remove/{id}', 'BasketController@cartRemove')->name('cart-remove');
Route::get('/shop', 'MainController@shop')->name('shop');
Route::get('/{category}', 'MainController@category')->name('category');





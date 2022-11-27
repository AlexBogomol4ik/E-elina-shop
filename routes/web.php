<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/')->uses('HomeController@index')->name('index');
Route::get('/cart', 'cartController@cart')->name('cart');
Route::get('/cart/checkout', 'cartController@checkout')->name('cart-checkout');
Route::post('/cart/add/{id}', 'cartController@cartAdd')->name('cart-add');
Route::post('/cart/remove/{id}', 'cartController@cartRemove')->name('cart-remove');
Route::post('/cart/remove-all-row/{id}', 'cartController@cartRemoveAllRow')->name('cart-remove-all-row');
Route::post('/cart/checkout-confirm', 'cartController@checkoutConfirm')->name('checkout-confirm');
Route::get('/shop/product-details/{id}', 'HomeController@productDetails')->name('product-details');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/product/list', 'HomeController@productListAjax')->name('product-list');
Route::post('/product/search','HomeController@searchProduct')->name('search');
Route::get('/about', 'HomeController@about')->name('about');


Auth::routes();
Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', 'AdminController@admin')->name('admin');
    Route::resource('/dashboard/products', 'ProductController');
    Route::get('/dashboard/order', 'AdminController@adminOrders')->name('admin-order');
    Route::get('/dashboard/order/show/{id}', 'AdminController@adminShowOrder')->name('admin-order-show');
    Route::get('/dashboard/user', 'AdminController@adminUsers')->name('admin-user');
    Route::resource('/dashboard/categories', 'CategoryController');
    Route::get('/dashboard/completeOrder/{id}', 'AdminController@completeOrder')->name('complete-order');
    Route::get('/dashboard/deleteOrder/{id}', 'AdminController@deleteOrder')->name('delete-order');
    Route::get('/dashboard/deleteUser/{id}', 'AdminController@deleteUser')->name('delete-user');
    Route::get('/dashboard/archiveOrder/{id}', 'AdminController@archiveOrder')->name('archive-order');
    Route::get('/dashboard/archive', 'AdminController@archive')->name('archive-order-list');
});




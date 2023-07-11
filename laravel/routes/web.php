<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'ShopController@main')->name('index');
Route::get('/shop', 'ShopController@shop')->name('shop');
Route::get('/shop/{shop}', 'ShopController@product')->name('product');
Route::get('/shop/shoping/cart', 'ShopController@cart')->name('cart');





 
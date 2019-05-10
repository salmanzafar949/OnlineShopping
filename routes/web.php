<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $products = \App\Product::all();

    return view('welcome',compact('products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::resource('/order','OrderController');
    Route::resource('/product','ProductController');
    Route::get('add-to-cart/{product}','OrderController@addToCart')->name('addtocart');
});

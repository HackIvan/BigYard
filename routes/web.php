<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/home');
// {
//     return view('welcome');
// });


Route::get('/token', 'TokenController@index')->name('home')->middleware('auth');
Route::get('/paymentpal', 'TokenController@paymentpal')->name('home')->middleware('auth');
Route::get('/africell', 'TokenController@africell')->name('token.africell')->middleware('auth');
Route::get('/orange', 'TokenController@orange')->name('orange')->middleware('auth');
Route::get('success', 'TokenController@SuccessRedirect')->name('layouts.successredirect')->middleware('auth');


// Route::get('/africell', 'TokenController@africell')->name('africell')->middleware('auth');



// Route::redirect('/productdetails', '/productdetails');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/search', 'ProductController@search')->name('products.search');


Route::resource('products', 'ProductController');



// Auth::routes();
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

// Route::resource('orders', 'OrderController')->middleware('auth');
Route::resource('orders', 'OrderController')->middleware('auth');

Route::resource('shops','ShopController')->middleware('auth');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

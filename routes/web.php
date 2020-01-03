<?php

use Gloudemans\Shoppingcart\Facades\Cart;
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
    return view('welcome');
});

//
Route::get('/all-products', 'ProductsController@index')->name('shop.index');;
Route::post('/all-products', 'ProductsController@store');
Route::get('/all-products/product-new', 'ProductsController@create');
Route::get('/all-products/{product}', 'ProductsController@show')->name('shop.show');
Route::get('/all-products/{product}/product-edit', 'ProductsController@edit')->name('product.edit');
Route::put('/all-products/{product}', 'ProductsController@update');
Route::get('/all-products/{product}/product-delete', 'ProductsController@destroy')->name('product.delete');
Route::get('/search','ProductsController@search')->name('search') ;

Route::get('/product-new-success', function () {
    return view('product-new-success');
});
//
Route::get('/shopping-cart', 'CartController@index')->name('cart.index');
Route::post('/shopping-cart', 'CartController@store')->name('cart.store');
Route::delete('/shopping-cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('empty',function (){
    Cart::destroy();
});
//
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
//
Route::get('/contact', 'SendMailController@index')->name('contact.index');
Route::post('/contact', 'SendMailController@store')->name('contact.store');
//
Route::get('/thx', function () {
    return view('thx');
});
//


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    return view('welcome');
});

// Route::get('/all-products', function () {
//     $products = App\Product::latest()->get();
//     return view('all-products',['products'=>$products]);
// });
Route::get('/all-products', 'ProductsController@index');
Route::post('/all-products', 'ProductsController@store');
Route::get('/all-products/product-new', 'ProductsController@create');
Route::get('/all-products/{product}', 'ProductsController@show');
Route::get('/all-products/{product}/product-edit', 'ProductsController@edit');
Route::put('/all-products/{product}', 'ProductsController@update');

Route::get('/product-page', function () {
    return view('product-page');
});
Route::get('/product-new-success', function () {
    return view('product-new-success');
});
Route::get('/check-out', function () {
    return view('check-out');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/shopping-cart', function () {
    return view('shopping-cart');
});
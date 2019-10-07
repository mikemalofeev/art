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
    return view('ecommerce');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/holst', function () {
    return view('holst');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/order', 'Order@orderAction');
Route::post('/order', 'Order@orderAction');

Route::get('/submit', 'Order@orderSubmitAction');
Route::post('/submit', 'Order@orderSubmitAction');

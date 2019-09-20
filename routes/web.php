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

use \Laravel\Lumen\Routing\Router;


/** @var $router \Laravel\Lumen\Routing\Router */

Route::get('/', function () {
    return view('ecommerce');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/holst', function () {
    return view('holst');
});

Route::get('/order', 'Order@orderAction');

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
    return view('main');
});

Route::get('/{action}', function ($action) {
    return view('products.' . $action);
});

Route::get('/holst', function () {
    return view('holst');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/shipment', function () {
    return view('shipment');
});

//Route::get('/email', function () {
//    return view('email');
//});

Route::get('/order', 'Order@orderAction');
Route::post('/order', 'Order@orderAction');

Route::get('/submit', 'Order@orderSubmitAction');
Route::post('/submit', 'Order@orderSubmitAction');

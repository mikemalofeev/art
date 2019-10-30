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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/order', [
    'as'   => 'order',
    'uses' => 'Order@orderAction',
]);

Route::get('/order-applied', [
    'as'   => 'order-applied',
    'uses' => 'Order@orderAppliedAction',
]);

Route::post('/submit', 'Order@orderSubmitAction');

Route::get('/{action}', function ($action) {
    return view($action);
});

Route::get('/{sub}/{action}', function ($sub, $action) {
    return view($sub . '.' . $action);
});

Route::get('/compositions', function () {
    return view('compositions');
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

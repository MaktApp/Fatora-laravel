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

 Route::resource('orders', 'PaymentController');

//Route::get('/success/{orderId}', 'PaymentController@checkStatus')->name('payment.checkstatus')

Route::group(['middleware' => ['checkstatus']], function()
{
    Route::get('/success/{orderId?}/{chkStatus?}', ['as' => 'payment.success' , 'uses' => 'PaymentController@getSuccessPage']);
    
});

Route::get('/error/{error_msg}', 'PaymentController@getErrorPage')->name('payment.error');
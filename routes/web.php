<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: group(['middleware'  => 'visitors'], function() {
	Route::get('/register', 'RegisterController@register');
	Route::post('/register', 'RegisterController@postRegister');
	Route::get('/auth', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');
});

Route:: group(['middleware' => 'authenticate'], function() {
	Route::get('/home', 'VisitorsController@index');
	Route::post('/logout', 'LoginController@logout');
});


Route:: group(['middleware' => 'admin'], function() {
	Route::get('/account', 'AdminController@index');
	Route::get('/gaji', 'AdminController@gaji');
	Route::get('/transfer_barang', 'AdminController@transfer_barang');
	Route::get('/expense', 'AdminController@expense');
	Route::get('/pengeluaran', 'AdminController@pengeluaran');	
});

Route:: group(['middleware' => 'employee'], function() {
	Route::get('/permission', 'EmployeeController@index');
	Route::get('/transaksi', 'EmployeeController@transaksi');	
	Route::get('/barang', 'EmployeeController@barang');
	
	Route::resource('/order', 'OrderController');
	Route::get('orderv2', 'OrderController@orderV2');
	Route::get('orderv3', 'OrderController@orderV3');
	//Route::get('/order/{id}', 'OrderController');
	
	Route::post('orderv2', 'OrderController@postOrderAndDetail');
	
	Route::post('/order', 'OrderController@postOrder');

	Route::get('/order_list', 'OrderController@orderList');
	Route::get('/order_detail_list', 'OrderController@orderDetailList');
	
	Route::post('/order_list/{id}', 'OrderController@postOrderDetail');
	
	//Route::get('/order_detail', 'OrderController@orderDetail');

});
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
    return view('auth.authenticate');
})->middleware('checklogin');

Route::resource('tesorder', 'TesController');
Route::get('tes', 'TesController@tes');
Route::post('find', 'TesController@Find');

Route::get('tes2', 'TesController@tes2');
Route::get('tes3', 'TesController@tes3');

Route::group(['middleware'  => 'visitors'], function() {
	Route::get('/register', 'RegisterController@register');
	Route::post('/register', 'RegisterController@postRegister');
	Route::get('/auth', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');
});

Route::group(['middleware' => 'authenticate'], function() {
	Route::get('/home', 'VisitorsController@index');
	Route::post('/logout', 'LoginController@logout');

	//Transaksi
	Route::resource('transaction', 'MainTransactionController');
	Route::post('transaction/{id}', 'MainTransactionController@update');	
	Route::get('/findPrice','MainTransactionController@findPrice');

});

Route::group(['middleware' => 'admin'], function() {
	Route::get('/account', 'AdminController@index');
	Route::get('/gaji', 'AdminController@gaji');
	Route::get('/transfer_barang', 'AdminController@transfer_barang');
	//Route::get('/expense', 'AdminController@expense');
	Route::get('/pengeluaran', 'AdminController@pengeluaran');
	Route::post('findGaji', 'AdminController@FindGaji');	

	//Finance
	Route::get('income', 'FinanceController@income');
	Route::get('outcome', 'FinanceController@outcome');
	Route::post('findIncome', 'FinanceController@findIncome');

	Route::resource('shipping', 'ShippingController');
	Route::post('shipping/{id}', 'ShippingController@update');

	Route::resource('supplier', 'SupplierController');
	Route::post('supplier/{id}', 'SupplierController@update');

	Route::resource('user', 'UserController');
	Route::post('user/{id}', 'UserController@update');

	Route::resource('location', 'LocationController');
	Route::post('location/{id}', 'LocationController@update');

	Route::resource('category', 'CategoryController');
	Route::post('category/{id}', 'CategoryController@update');

	Route::resource('technician', 'TechnicianController');
	Route::post('technician/{id}', 'TechnicianController@update');

	Route::resource('expense', 'ExpenseController');
	Route::post('expense/{id}', 'ExpenseController@update');

	Route::resource('salary', 'SalaryController');
	Route::post('salary/{id}', 'SalaryController@update');		

});

Route::group(['middleware' => ['employee']], function() {
	Route::get('/permission', 'EmployeeController@index');
	Route::get('/transaksi', 'EmployeeController@transaksi');	
	Route::get('/barang', 'EmployeeController@barang');
	
	//Customer
	Route::resource('customer', 'CustomerController');
	Route::post('customer/{id}', 'CustomerController@update');

	//Order
	Route::resource('order', 'OrderController');
	Route::post('order/{id}', 'OrderController@update');

	//Service
	Route::resource('service', 'ServiceController');
	Route::post('service/{id}', 'ServiceController@update');

	//Service Item
	Route::resource('service_item', 'ServiceItemController');
	Route::post('service_item/{id}', 'ServiceItemController@update');

	//Service Status
	Route::resource('service_status', 'ServiceStatusController');
	Route::post('service_status/{id}', 'ServiceStatusController@update');

	//Purchase Order
	Route::resource('purchase_order', 'PurchaseOrderController');
	Route::post('purchase_order/{id}', 'PurchaseOrderController@update');

	//Product
	Route::resource('product', 'ProductController');
	Route::get('productv2', 'ProductController@productv2');
	Route::post('product/{id}', 'ProductController@update');
	Route::post ( '/deleteItem', 'ProductController@deleteItem' );

});

	
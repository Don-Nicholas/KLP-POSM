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
#route for dashboard or home
Route::get('/', function () {
    return view('dashboards.dashboard');
});
#route for sales transaction monitoring
Route::resource('/customers', 'CustomersController' );
Route::resource('/inventories', 'InventoryController' );
Route::resource('/sales', 'SalesController' );
Route::resource('/beverages_list', 'BeveragesListsController' );
Route::resource('/purchase', 'SalesInvoicesController' );
Route::resource('/suppliers', 'SuppliersController' );
Route::resource('/userlogs', 'UserLogsController' );
Route::resource('/flagcustomer', 'AccountPayablesController' );
Route::resource('/controller', 'Controller' );
?>

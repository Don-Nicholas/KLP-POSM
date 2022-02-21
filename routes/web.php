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

Route::get('/', function () {
    return view('dashboards.dashboard');
});

Route::resource('/customers', 'CustomersController');
Route::resource('/suppliers', 'SuppliersController');
Route::resource('/sales', 'SalesController');
Route::resource('/inventory', 'InventoryController');
Route::resource('/purchase', 'SalesInvoicesController');
Route::resource('/beverages_list', 'BeveragesListsController');
Route::resource('/flagcustomer', 'AccountPayablesController');
Route::resource('/userlogs', 'UserLogsController');
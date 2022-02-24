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
Route::get('/sales', function() {
    return view('sales.index');
});

Route::get('/sales', function(){
    return view('sales.sales');
});

Route::get('/sales', function(){
    return view('sales.sales2');
});

Route::get('/customers', function(){
    return view('customers.customer');    
});

Route::get('/customers',function(){
    return view('customers.cus_details');
});

Route::get('/customers', function(){
    return view('customers.customer_update');
});

Route::get('/customers', function(){
    return view('customer.flagcustomer');
});

Route::get('/suppliers', function(){
    return view('suppliers.sup_transac');
});

Route::get('/suppliers', function(){
    return view('suppliers.supplier_session');
});

Route::get('/suppliers', function(){
    return view('suppliers.supplier');
});

Route::get('/suppliers', function(){
    return view('suppliers.supplier2');
});

Route::get('/suppliers', function(){
    return view('suppliers.supplierbev');
});

#route for purchase history and stocks inventory
Route::get('/inventory', function(){
    return view('inventory.inventory');
});

#route for sales invoice transactions
Route::get('/purchases', function(){
    return view('purchases.purchase');
});

Route::get('/payments', function(){
    return view('/payments.bayadform');
});

Route::get('/payments', function(){
    return view('payments.bayadformcash');
});

Route::get('/payments', function(){
    return view('payments.bayadformcheck');
});

Route::get('/beverages', function(){
    return view('beverages.beverages');
});
#product or beverages list
Route::get('/beverages', function(){
    return view('beverages.beverages_list');
});
#account payables based on mode of payment cheque
Route::get('/flags', function(){
    return view('flags.flagcustomer');
});

#processes query from db
Route::get('/process', function(){
    return view('process.process_bayadcash');
});

Route::get('/process', function(){
    return view('process.process_bayadcheck');
});

Route::get('/process', function(){
    return view('process.process_beverages');
});

Route::get('/process', function(){
    return view('process.process_customer');
});

Route::get('/process', function(){
    return view('process.process_customerdelete');
});

Route::get('/process', function(){
    return view('process.process_customerpurchase');
});
Route::get('/process', function(){
    return view('process.process_customerupdate');
});

Route::get('/process', function(){
    return view('process.process_details');
});

Route::get('/process', function(){
    return view('process.process_flagcustomer');
});

Route::get('/process', function(){
    return view('process.process_index2');
});

Route::get('/process', function(){
    return view('process.process_mop');
});
Route::get('/process', function(){
    return view('process.process_purchasedelete');
});

Route::get('/process', function(){
    return view('process.process_updateflagcustomer');
});

Route::get('/process', function(){
    return view('process.process_customerdelete');
});

Route::get('/modals', function(){
    return view('modals.modal2');
});

Route::get('/modals', function(){
    return view('modals.modal3');
});

Route::get('/modals', function(){
    return view('modals.modal4');
});


?>

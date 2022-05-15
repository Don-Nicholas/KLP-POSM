<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerSale;
use App\Models\Purchase;


class CustomerSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_sales = CustomerSale::all();

        return view('customersales.index')->with('customersales', $customer_sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->input('mop') === 'Cash')
        {
            $this->validate($request, [
                'total_quantity' => 'required',
                'customer_name' => 'required',
                'amount_due' => 'required',
                'discount'=> 'required',
                'cash' => 'required',
                'change' => 'required'
            ]);
        }
        else {
            $this->validate($request, [
                'total_quantity' => 'required',
                'customer_name' => 'required',
                'amount_due' => 'required',
                'postDate'=> 'required',
                'checkNumber' => 'required',
                'bankName' => 'required',
                'checkAmount' => 'required'
            ]);
        }

        $customerSale = new CustomerSale;
        $customerSale->customer_name = $request->input('customer_name');
        $customerSale->mop = $request->input('mop');
        $customerSale->amount = $request->input('amount_due');
        $customerSale->total_quantity = $request->input('total_quantity');
        $current_date = date('Y-m-d H:i:s');

        if($request->input('mop') === 'Cash'){
            // $customerSale->discount = $request->input('discount');
            $customerSale->total_cash = $request->input('cash');
            $customerSale->checknum ="N/A";
            $customerSale->check_date = $current_date;
            $customerSale->bankname = "N/A";
            $customerSale->check_amount = 0;
        }
        else {
            $customerSale->discount = 0;
            $customerSale->total_cash = 0;
            $customerSale->checknum ="N/A";
            $customerSale->check_date = $request->input('postDate');
            $customerSale->bankname = $request->input('bankName');
            $customerSale->check_amount = $request->input('checkAmount');
        }

        $customerSale->date = $current_date;
        
        $customerSale->save();

        Purchase::query()->truncate();

        return redirect('/purchase')->with('Cash Payment Method Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Deleted Successfully!');
    }
}

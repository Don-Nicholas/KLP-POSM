<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerSale;


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

        return $request;



        $purchased = new Purchased;
        $purchased->customer_name = $request->input('customer_name');
        $purchased->amount_due = $request->input('amount_due');
        $purchased->discount = $request->input('discount');
        $purchased->total_cash = $request->input('cash');
        $purchased->total_quantity = $request->input('total_quantity');
        $current_date = date('Y-m-d H:i:s');
        $purchased->date_purchased = $current_date;

        $purchased->save();

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

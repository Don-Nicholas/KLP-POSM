<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\MOP;
use App\Models\Beverage;
use App\Models\Category;
use App\Models\Purchase;

class AccountPayablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //return from models; 
        $customers = Customer::all();
       
        $mops = MOP::all();
        $beverageslist = Beverage::all();
        $categories = Category::all();
        $purchases = Purchase::all();

        

        return view('payables.index');
        return view('invoices.index')->with('customers', $customers)->with('m_o_p_s', $mops)->with('beverages',$beverageslist)->with('categories', $categories)
        ->with('purchases',$purchases );

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
        $this->validate($request, [
            'id'=> 'required',
            'name' => 'required',
            'contact' => 'required',
            'total' =>'required',
            'bank_name' => 'required',
            'date_purchase' => 'required']);


         
         $total = Purchase::find($request->input('total'));
         $purchase = Purchase::find($request->input('beverage'));

         $payables = new Purchased;


        $payables->id = $request->input('id');
        $payables->name = $request->input('name');
        $payables->contact = $request->input('contact');
        $payables->total = $request->input('total');
        $payables->bank_name = date('bank_name');
        $payables->date_purchase = $current_date;
        $payables->total = $total;
        $payables->amount_due = $amount_due;
        $payables->save();
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
        $supplier = Supplier::find($id);
        $customers = Customer::find($id);
        //return $customers; 
        $mops = MOP::find($id);
        $beverageslist = Beverage::find($id);
        $categories = Category::find($id);
        $purchases = Purchase::all($id);
        return view('suppliers.edit')->with('customers', $customers)->with('m_o_p_s', $mops)->with('beverages',$beverageslist)->with('categories', $categories)
        ->with('purchases',$purchases );

    
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
        //
    }
}

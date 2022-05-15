<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Payable;
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
        $payables = Payable::all();
        $customers = Customer::all();
        $mops = MOP::all();
        $beverageslist = Beverage::all();
        $categories = Category::all();
        $purchases = Purchase::all();

        

        return view('payables.index')->with('payables', $payables)->with('customers', $customers)->with('m_o_p_s', $mops)->with('beverages',$beverageslist)->with('categories', $categories)
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
            'customer_id' => 'required',
            'bank_name' => 'required',
            'check_number' =>'required',
            'total_purchase' => 'required',
            'check_amount' => 'required',
            'check_postdate' => 'required']);


         
         $total = Purchase::find($request->input('total'));
         $purchase = Purchase::find($request->input('beverage'));

         $payables = new Purchased;


        $payables->id = $request->input('id');
        $payables->customer_name = $request->input('name');
        $payables->bank_name = $request->input('bank_name');
        $payables->check_number = $request->input('check_number');
        $payables->total_purchase = $request->input('total_purchase');
        $payables->check_amount = $request->input('check_amount');
        $payables->check_postdate = $request->date('check_postdate');
        
        $payables->save();
        return redirect('/payables')->with('success', 'Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payables = Payable::all();
        $customers = Customer::all();
        $mops = MOP::all();
        $beverageslist = Beverage::all();
        $categories = Category::all();
        $purchases = Purchase::all();

        return view('payables.show')->with('payables',$payables)->with('customers', $customers)->with('m_o_p_s', $mops)->with('beverages',$beverageslist)->with('categories', $categories)
        ->with('purchases',$purchases );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payables = Payable::find();
        $customers = Customer::all();
        $mops = MOP::all();
        $beverageslist = Beverage::all();
        $categories = Category::all();
        $purchases = Purchase::all();

        return view('payables.edit')->with('payables',$payables)->with('customers', $customers)->with('m_o_p_s', $mops)->with('beverages',$beverageslist)->with('categories', $categories)
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
        $this->validate($request, [
            'id'=> 'required',
            'customer_id' => 'required',
            'bank_name' => 'required',
            'check_number' =>'required',
            'total_purchase' => 'required',
            'check_amount' => 'required',
            'check_postdate' => 'required']);


         
         $total = Purchase::find($request->input('total'));
         $purchase = Purchase::find($request->input('beverage'));

         $payables = new Purchased;


        $payables->id = $request->input('id');
        $payables->customer_name = $request->input('name');
        $payables->bank_name = $request->input('bank_name');
        $payables->check_number = $request->input('check_number');
        $payables->total_purchase = $request->input('total_purchase');
        $payables->check_amount = $request->input('check_amount');
        $payables->check_postdate = $request->date('check_postdate');
        
        $payables->save();
        return redirect('/payables')->with('success', 'Updated Successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payables = Payable::find();
        $payables->delete();
        
        return redirect('/payables')->with("success","Deleted Successfuly!");

    }
}

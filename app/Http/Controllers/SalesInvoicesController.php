<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\MOP;
use App\Models\Beverage;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Order;


class SalesInvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $getOrderRecentOrderNumber = DB::select('SELECT * FROM orders ORDER BY id DESC');
        
        $orderID = $getOrderRecentOrderNumber[0]->id;


        $orderNumber = $getOrderRecentOrderNumber[0]->order_number + 1;


        $customers = Customer::all();
        //return $customers; 
        $mops = MOP::all();
        $beverageslist = Beverage::all();
        $categories = Category::all();
        $purchases = Purchase::all();

        $totals = 0;
        foreach($purchases as $purchase) {
            $totals += $purchase->total;
        }

        return view('invoices.index')->with('customers', $customers)->with('m_o_p_s', $mops)->with('beverages',$beverageslist)->with('categories', $categories)
        ->with('purchases',$purchases )->with('grandTotal', $totals)->with('orderNumber', $orderNumber)->with('orderID', $orderID);

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

        return $request;

        $this->validate($request, [
            'productname'=> 'required',
            'category' => 'required',
            'mop' => 'required',
            'case' =>'required',
                       ]);

            $salesinvoices = new BeverageList;

        $beverages->product_name = $request->input('p_name');
        $beverages->supplier_id = $request->input('supplier_id');
        $beverages->quantity = $request->input('quantity');
        $beverages->price_case = $request->input('price_case');
        $beverages->price_solo = $request->input('price_solo');
        $beverages->date_expire = $request->input('date_expire');
        $beverages->badorder = $request->input('badorder');
      

        $beverages->save();

        $order = Order::find();

        return redirect('/beverages_list')->with('success', 'Inserted Successfully');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
        $post = posts::find($id);
        $post->delete();
        return redirect('/');
    }
}

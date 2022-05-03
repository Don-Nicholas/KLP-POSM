<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Beverage;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Order;

class InventoryController extends Controller
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

        $inventories = Inventory::all();
        $beverageslist = Beverage::all();
        $categories = Category::all();
        $purchases = Purchase::all();
        
        $recentbeverage = 0;
        foreach($purchases as $purchase) {
            $totals += $purchase->total;
        }


        return view('inventories.index')->with('inventories', $inventories)->with('beverages',$beverageslist)->with('categories', $categories)
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
        $this->validate($request, [
            'product_name'=> 'required',
            'category_id' => 'required',
            'quantity' => 'required',
            'date_expire' => 'required',
            'badorder' => 'required'
                                 ]);

        $inventory = new Inventory;

        $inventory->product_name = $request->input('product_name');
        $inventory->category_id = $request->input('category_id');
        $inventory->quantity = $request->input('quantity');
        $inventory->date_expire = $request->input('date_expire');
        $inventory->badorder= $request->input('badorder');

        $inventory->save();

        return redirect('/inventories')->with('success', 'Inserted Successfully');
     
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
        $inventory = Inventory::all();
        return view('inventory.inventory')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.edit')->with('inventory', $inventory);
   
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
            'product_name'=> 'required',
            'category-id' => 'required',
            'quantity' => 'required',
            'date_expire' => 'required',
            'badorder' => 'required'
                                 ]);

        $inventory = new Inventory;

        $inventory->product_name = $request->input('product_name');
        $inventory->category_id = $request->input('category_id');
        $inventory->quantity = $request->input('quantity');
        $inventory->date_expire = $request->input('date_expire');
        $inventory->badorder= $request->input('badorder');

        $inventory->save();

        return redirect('/inventories')->with('success', 'Inserted Successfully');
     
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

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Beverage;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Order;
use App\Models\Inventory;


class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'orderNumber'=> 'required',
            'beverage' => 'required',
            'category' => 'required',
            'case' =>'required']);


        $beverage = Beverage::find($request->input('beverage'));
        $total =  $beverage->price_case * $request->input('case');

         $purchases = new Purchase;

        $purchases->order_id = $request->input('orderNumber');
        $purchases->beverage_id = $request->input('beverage');
        $purchases->quantity = $request->input('case');
        $purchases->category_id = $request->input('category');
        $current_date = date('Y-m-d H:i:s');
        $purchases->date_purchase = $current_date;
        $purchases->total = $total;
        $purchases->save();

        $result = DB::table('beverages')->where('product_name', 'Coke')->orderBy('id', 'DESC')->get();

        $quantity =  (int)$result[0]->quantity - (int)$request->input('case');
        // return $result[0];

        $inventory = new Inventory;
        $inventory->supplier_id = $result[0]->supplier_id;
        $inventory->product_name = $result[0]->product_name;
        $inventory->category_id = $result[0]->category_id;
        $inventory->quantity = $quantity;
        $inventory->price_case = $result[0]->price_case;
        $inventory->price_solo = $result[0]->price_solo;
        $inventory->date_expire = $result[0]->date_expire;
        $inventory->barorder = $result[0]->barorder;
        $inventory->save();

        $beverageOne = Beverage::find($result[0]->id);
        $beverageOne->quantity = $quantity;
        $beverageOne->save();

        

        $orderID = (int)$request->input('orderID');
        $order = Order::find($orderID);
        $order->order_number = $request->input('orderNumber');
        $order->save();

        return redirect('/purchase')->with('success', 'Inserted Successfully');
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
        //
    }
}

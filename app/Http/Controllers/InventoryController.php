<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\BeverageList;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = Inventory::all();
        
        return view('inventories.index')->with('inventories', $inventories);
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

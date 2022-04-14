<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beverage;
use App\Models\Supplier;
// use App\Models\Product;
use App\Models\Category;

class BeveragesListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $beverages = Beverage::all();
        $suppliers = Supplier::all(); 
        // $products = Product::all();
        $category = Category::all();

        return view('beverages.index')->with('beverages', $beverages)->with('suppliers', $suppliers)
       ->with('category',$category);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
             'p_name'=> 'required',
             'supplier_id' => 'required',
             'quantity' => 'required',
             'price_case' => 'required',
             'price_solo' => 'required',
             'category_id' => 'required',
             'date_expire' => 'required',
             'badorder' => 'required']);

             $beverages = new Beverage;

         $beverages->product_name = $request->input('p_name');
         $beverages->supplier_id = $request->input('supplier_id');
         $beverages->category_id = $request->input('category_id');
         $beverages->quantity = $request->input('quantity');
         $beverages->price_case = $request->input('price_case');
         $beverages->price_solo = $request->input('price_solo');
         $beverages->date_expire = $request->input('date_expire');
         $beverages->barorder = $request->input('badorder');
       

         $beverages->save();

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
        $beverages = Beverage::find($id);
        $suppliers = Supplier::all(); 
        // $products = Product::all();
        $category = Category::all();

        return view('beverages.show')->with('beverages', $beverages)->with('suppliers', $suppliers)
        ->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beverages = Beverage::find($id);
        $suppliers = Supplier::all(); 
        // $products = Product::all();
        $category = Category::all();

        return view('beverages.edit')->with('beverages', $beverages)->with('suppliers', $suppliers)
        ->with('category',$category);
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
            'p_name'=> 'required',
            'supplier_id' => 'required',
            'quantity' => 'required',
            'price_case' => 'required',
            'price_solo' => 'required',
            'category_id' => 'required',
            'date_expire' => 'required',
            'badorder' => 'required']);

            $beverages = Beverage::find($id);

        $beverages->product_name = $request->input('p_name');
        $beverages->supplier_id = $request->input('supplier_id');
        $beverages->category_id = $request->input('category_id');
        $beverages->quantity = $request->input('quantity');
        $beverages->price_case = $request->input('price_case');
        $beverages->price_solo = $request->input('price_solo');
        $beverages->date_expire = $request->input('date_expire');
        $beverages->barorder = $request->input('badorder');
      

        $beverages->save();

        return redirect('/beverages_list')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beverage = Beverage::find($id);
        $beverage->delete();

        return redirect('/beverages_list')->with("success","Deleted Successfuly!");
    }
}

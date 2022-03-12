<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeverageList;
use App\Models\Supplier;
use App\Models\Product;
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

        $beverages = BeverageList::all();
        $suppliers = Supplier::all();
        $products = Product::all();
        $category = Category::all();
        return view('beverages.index')->with('beverages', $beverages)->with('suppliers', $suppliers)
        ->with('product', $products)->with('category',$category);

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

        return $request;

        // $this->validate($request, [
        //     'name'=> 'required',
        //     'cat_name' => 'required',
        //     'quantity' => 'required',
        //     'price_case' => 'required',
        //     'price_solo' => 'required'
        // ]);

        // $beverages = new Beverage;

        // $beverages->name = $request->input('name');
        // $beverages->cat_name = $request->input('cat_name');
        // $beverages->quantity = $request->input('quantity');
        // $beverages->price_case = $request->input('price_case');
        // $beverages->price_solo = $request->input('price_solo');
       

        // $beverages->save();

        // return redirect('/beverages')->with('success', 'Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beverages= Beverage::find($id);
        return view('beverages.show')->with('beverage', $beverages);
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
        $beverages= Beverage::find($id);
        return view('beverages.edit')->with('beverage', $beverages);
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

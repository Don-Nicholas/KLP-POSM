<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($request->ajax()) {
            $data = CustomerSales::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="/sales/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>
                            <a href="/sales/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>
                            ';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

  

        return view('sales.index');
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
            'order_id'=> 'required',
            'beverage_id' => 'required',
            'quantity' => 'required',
            'total'=> 'required',
            'date_purchase' => 'required'
                                 ]);

        $sale = new CustomerSale;

        $sale->order_id = $request->input('order_id');
        $sale->beverage_id = $request->input('beverage_id');
        $sale->quantity = $request->input('quantity');
        $sale->total = $request->input('total');
        $sale->date_purchase = $request->input('date_purchase');

        $sale->save();

        return redirect('/sales')->with('success', 'Inserted Successfully');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = CustomerSale::find($id);
        return view('sales.show')->with('sale', $sale);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = CustomerSale::find($id);
        return view('sales.edit')->with('sale', $sale);
  
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
            'order_id'=> 'required',
            'beverage_id' => 'required',
            'quantity' => 'required',
            'total'=> 'required',
            'date_purchase' => 'required'
                                 ]);

        $sale = new CustomerSale;

        $sale->order_id = $request->input('order_id');
        $sale->beverage_id = $request->input('beverage_id');
        $sale->quantity = $request->input('quantity');
        $sale->total = $request->input('total');
        $sale->date_purchase = $request->input('date_purchase');

        $sale->save();

        return redirect('/sales')->with('success', 'Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = CustomerSale::find($id);
        $sale->delete();

        return redirect('/sales')->with('success', 'Deleted Successfully!');
  
    }
}

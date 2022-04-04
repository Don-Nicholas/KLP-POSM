<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>
                            <a href="/orders/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>
                            ';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

    }
    return view('orders.index');

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
        //
        $this->validate($request, [
            'id'=> 'required',
            'order_number' => 'required',
           
                                 ]);

        $order = new Order;

        $order->id = $request->input('id');
        $order->order_number = $request->input('order_number');
        

        $order->save();

        return redirect('/orders')->with('success', 'Inserted Successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show')->with('order', $order);
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit')->with('order', $order);
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
            'order_number' => 'required',
           
                                 ]);

        $order = new Order;

        $order->id = $request->input('id');
        $order->order_number = $request->input('order_number');
        

        $order->save();

        return redirect('/orders')->with('success', 'Updated Successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('/orders')->with('success', 'Deleted Successfully!');
    
    }
}

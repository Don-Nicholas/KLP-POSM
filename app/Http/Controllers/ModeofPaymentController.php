<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeofPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($request->ajax()) {
            $data = MOP::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="/m_o_p_s/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>
                            <a href="/m_o_p_s/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>
                            ';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('m_o_p_s.index');

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
            'mode' => 'required'
                                 ]);

        $mop = new MOP;

        $mop->id = $request->input('id');
        $mop->mode = $request->input('mop');
       

        $mop->save();

        return redirect('/m_o_p_s')->with('success', 'Inserted Successfully');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mop = MOP::find($id);
        return view('m_o_p_s.show')->with('m_o_p_s', $mop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mop = MOP::find($id);
        return view('m_o_p_s.edit')->with('m_o_p_s', $mop);
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
            'mode' => 'required'
                                 ]);

        $mop = new MOP;

        $mop->id = $request->input('id');
        $mop->mode = $request->input('mop');
       

        $mop->save();

        return redirect('/m_o_p_s')->with('success', 'Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mop = MOP::find($id);
        $mop->delete();

        return redirect('/m_o_p_s')->with('success', 'Deleted Successfully!');
    
    }
}

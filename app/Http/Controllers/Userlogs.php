<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userlogs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Userlogs::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="/users/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>
                            <a href="/users/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>
                            ';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('users.index');

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
            'name'=> 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password'=> 'required',
            'remember_token' => 'required'
           
                                 ]);

        $userlogs = new Userlogs;

        $userlogs->name = $request->input('name');
        $userlogs->email = $request->input('email');
        $userlogs->email_verified_at = $request->input('email_verified_at');
        $userlogs->password = $request->input('password');
        $userlogs->remeber_token = $request->input('remember_token');
        $customer->save();

        return redirect('/users')->with('success', 'Inserted Successfully');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userlogs = Userlogs::find($id);
        return view('users.show')->with('userlogs', $userlogs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userlogs = Userlogs::find($id);
        return view('users.edit')->with('userlogs', $userlogs);
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
            'name'=> 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password'=> 'required',
            'remember_token' => 'required'
           
                                 ]);

        $userlogs = new Userlogs;

        $userlogs->name = $request->input('name');
        $userlogs->email = $request->input('email');
        $userlogs->email_verified_at = $request->input('email_verified_at');
        $userlogs->password = $request->input('password');
        $userlogs->remeber_token = $request->input('remember_token');
        $customer->save();

        return redirect('/users')->with('success', 'Updated Successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userlogs = Userlogs::find($id);
        $userlogs->delete();

        return redirect('/users')->with('success', 'Deleted Successfully!');
 
    }
}

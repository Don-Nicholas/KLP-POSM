    @extends('layouts.app')
    @section('content')

        <a href="/suppliers" class="btn btn-primary">Back</a>
        <h1>Supplier's Name: {{$suppliers->name}}</h1>
        <p>Supplier's Address: {{$suppliers->address}}</p>
        <p>Contact Number: {{$suppliers->number}}</p>


        
        {!!Form::open(["action"=>["SuppliersController@destroy", $suppliers->id], "method"=>"POST"])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
        {!!Form::close()!!}
    @endsection
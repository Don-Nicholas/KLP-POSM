@extends('layouts.app')
    @section('content')

        <a href="/customers" class="btn btn-primary">Back</a>
        <h1>Customer Name: {{$customer->name}}</h1>
        <p>Customer Address: {{$customer->address}}</p>
        <p>Phone Number: {{$customer->contact}}</p>


        
        {!!Form::open(["action"=>["CustomersController@destroy", $customer->id], "method"=>"POST"])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
        {!!Form::close()!!}
    @endsection
@extends('layouts.app')
@section('content')
    <a href="/beverages_list" class="btn btn-primary">Back</a>
    <h1>Beverages Name: {{$beverages->product_name}}</h1>
    <h3>Supplier Address: {{$beverages->supplier->name}}</h3>
    <p>Category: {{$beverages->category->cat_name}}</p>
    <p>Quantity: {{$beverages->quantity}}</p>
    <p>Price Case: {{$beverages->price_case}}</p>
    <p>Price Solo: {{$beverages->price_solo}}</p>
    <p>Expiration Date: {{$beverages->date_expire}}</p>



    {!!Form::open(["action"=>["BeveragesListsController@destroy", $beverages->id], "method"=>"POST"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    <button type="submit" class="btn btn-danger">Delete</button>
    {!!Form::close()!!}
@endsection
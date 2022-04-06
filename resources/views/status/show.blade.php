@extends('layouts.app')
@section('content')

    <a href="/status" class="btn btn-primary">Back</a>
    <h3>Supplier's Name: {{$status->status}}</h3>
    <p>Created At_: {{$status->created_at}}</p>
    <p>Updated At_: {{$status->updated_at}}</p>


    
    {!!Form::open(["action"=>["StatusController@destroy", $status->id], "method"=>"POST"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    <button type="submit" class="btn btn-danger">Delete</button>
    {!!Form::close()!!}
@endsection
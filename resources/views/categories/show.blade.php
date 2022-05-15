@extends('layouts.app')
@section('content')
    <a href="/categories" class="btn btn-primary">Back</a>
    <h4>Category Name: {{$category->cat_name}}</h4>
    <p>Created At_: {{$category->created_at}}</p>
    <p>Updated at_: {{$category->updated_at}}</p>

    {!!Form::open(["action"=>["CategoriesController@destroy", $category->id], "method"=>"POST"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
    {!!Form::close()!!}
@endsection
@extends('layouts.app')
    @section('content')
        <h1>Customer Name: {{$customer->name}}</h1>
        <p>Customer Address: {{$customer->address}}</p>
        <p>Phone Number: {{$customer->contact}}</p>
    @endsection
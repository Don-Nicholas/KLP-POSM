@extends('layouts.app')
    @section('content')
        <h1>Customer Name: {{$suppliers->name}}</h1>
        <p>Customer Address: {{$suppliers->address}}</p>
        <p>Phone Number: {{$suppliers->contact}}</p>
    @endsection
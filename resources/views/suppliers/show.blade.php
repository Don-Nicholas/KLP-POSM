@extends('layouts.app')
    @section('content')
        <h1>Supplier's Name: {{$suppliers->name}}</h1>
        <p>Supplier's Address: {{$suppliers->address}}</p>
        <p>Contact Number: {{$suppliers->number}}</p>
    @endsection
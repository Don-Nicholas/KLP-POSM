@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => ['StatusController@update', $status->id], 'method' => 'POST']) !!}
    <div class="form-group">
        <input class="form-control" placeholder="Status" name="status" value="{{$status->status}}" required>
    </div>
    <div class="modal-footer">
        <a href="/status" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary" name="save">Update</button>
    </div>
    <input type="hidden" name="_method" value="PUT">
    {!! Form::close() !!}
@endsection
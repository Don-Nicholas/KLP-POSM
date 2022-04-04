@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h2>Customer Information&nbsp;
             <a href="#myModal" role="button" class="btn btn-md btn-primary" data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i>Add</a></h2>
                </div>
                <div class="container">
                    <h3>Customers</h3>
                    
                            @if (count($customers) > 0)
                            <table class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Created_at</th>
                                        <th width="100px" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{$customer->id}}</td>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>{{$customer->contact}}</td>
                                            <td>{{$customer->created_at}}</td>
                                            <td><a href="/customers/{{$customer->id}}">View</a></td>
                                            <td><a href="/customers/{{$customer->id}}/edit">Edit</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <h1>No Customer's Data Avaiable.</h1>
                            @endif
                        
<!-- Button HTML (to Trigger Modal) -->
   
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Customer's Information</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                {!! Form::open(['action' => 'CustomersController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    <input class="form-control" placeholder="Customer's Name" name="name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Address" name="address" required>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Contact Number" name="contact" required>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="save">Add</button>
                </div>
            {!! Form::close() !!}
          </div>
      </div>
  </div>

@endsection

@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Customers&nbsp;
                        <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-bs-toggle="modal"><i
                                class="fas fa-fw fa-plus"></i></a>
                    </h6>
                </div>
                <div class="container">
                    <h1>Users</h1>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Button HTML (to Trigger Modal) -->

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5>
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

    <script type="text/javascript">
        $(function () {
            
          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('customers.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'name', name: 'name'},
                  {data: 'address', name: 'address'},
                  {data: 'contact', name: 'contact'},
                  {data: 'created_at', name: 'created_at'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
            
        });
      </script>

@endsection

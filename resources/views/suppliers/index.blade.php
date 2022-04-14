@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h2>Suppliers &nbsp;
             <a href="#myModal" role="button" class="btn btn-md btn-primary" data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i>Add</a></h2>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        {!! Form::open(['action' => 'SuppliersController@store', 'method' => 'POST']) !!}
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Address</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Contact</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Created At</th>
                                        <th class="text-secondary opacity-7" colspan="2">
                                            Actions
                                        </th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($suppliers) > 0)
                                    @foreach ($suppliers as $suppliers)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$suppliers->name}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$suppliers->address}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">{{$suppliers->number}}</span>
                                            </td>
                                             <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $suppliers->created_at }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/suppliers/{{ $suppliers->id }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    View
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/suppliers/{{ $suppliers->id }}/edit"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h1>No suppliers information.</h1>
                                @endif
                            </tbody>
                        </table>
                    </div>
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
                  <h5 class="modal-title">Supplier's Information</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                {!! Form::open(['action' => 'SuppliersController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    <input class="form-control" placeholder="Supplier's Name" name="name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Address" name="address" required>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Contact Number" name="number" required>
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

@extends('layouts.app')
@section('content')
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <h2>
                        <center>Mode Of Payments</center>
                    </h2>

                </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="container">

                        <div class="content">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-2 font-weight-bold text-primary">Mode Of Payments&nbsp;
                                        <!-- MODAL for ADDING BEVERAGES-->
                                        <a href="#myModal" role="button" class="btn btn-md btn-primary"
                                            data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i>Add</a>
                                    </h4> 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="userTable" class="table">
                                            <thead>

                                                <th>id</th>
                                                <th>Mode of Payments</th>
                                                <th colspan="2">Actions</th>
                                            </thead>
                                            <tbody> 
                                                @foreach ($mops as $mop)
                                                    <tr>
                                                        <td>{{$mop->id}}</td>
                                                        <td>{{$mop->mode}}</td>
                                                        <td class="align-middle">
                                                            <a href="/mops/{{$mop->id}}"
                                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                                data-original-title="Edit mops">
                                                                View
                                                            </a>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="/mops/{{$mop->id}}/edit"
                                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                                data-original-title="Edit user">
                                                                Edit
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->

            <!-- .animated -->
        </div><!-- .content -->
        <!--/.col-->
        <!-- Modal HTML -->
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mode of Payments Info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['action' => 'ModeofPaymentController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            <input class="form-control" placeholder="Mode Of Payment" name="mode" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="save">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        </html>

    @endsection

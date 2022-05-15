

@extends('layouts.app')
@section('content')
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-10">
                    <h2>
                        <center>KLP BEVERAGES TRADING</center>
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
                                    <h3 class="m-2 font-weight-bold text-primary">Inventories&nbsp;
                                    </h3> 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="userTable" class="table">
                                            <thead>
                                                <th>Beverages Information</th>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if (count($inventories) > 0)
                                    <table class="table table-bordered data-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Product Name</th>
                                                <th>Category Name</th>
                                                <th>Quantity </th>
                                                <th>Price per Case </th>
                                                <th>Price per Solo  </th>
                                                <th>Date of Expiry</th>
                                                <th>Bad Order</th>
                                         
                                           </thead>
                                            <tbody> 
                                                @foreach ($inventories as $inventory)
                                                    <tr>
                                                        <td>{{$inventory->id}}</td>
                                                        <td>{{$inventory->product->beverage_name}}</td>
                                                        <td>{{$inventory->category->cat_name}}</td>
                                                        <td>{{$inventory->product->total_quantity}}</td>
                                                        <td>{{$inventory->product->price_case}}</td>
                                                        <td>{{$inventory->product->price_solo}}</td>
                                                        <td>{{$inventory->product->date_expire}}</td>
                                                        <td>{{$inventory->product->badorder}}</td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                            
                                    @else
                                        <h1>No Inventories Information Available.</h1>
                                    @endif
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
                        <h5 class="modal-title">Category Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['action' => 'InventoryController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            <input class="form-control" placeholder="Category Name" name="cat_name" required>
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

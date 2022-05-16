@extends('layouts.app')
@section('content')
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <h3 class="m-2 font-weight-bold text-primary">
                        <center>Customer Sales</center>
                    </h3>

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
                                    <h4 class="m-2 font-weight-bold text-primary">Customer Sales&nbsp;
                                        <!-- MODAL for ADDING BEVERAGES-->
                                        {{-- <a href="#myModal" role="button" class="btn btn-md btn-primary"
                                            data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i>Add</a> --}}
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="userTable" class="table">
                                            <thead>

                                                {{-- <th>id</th> --}}
                                                <th>Customer Name</th>
                                                <th>Mode of Payment</th>
                                                <th>Amount Due</th>
                                                <th>Check No.</th>
                                                <th>Check Date</th>
                                                <th>Bank Name</th>
                                                <th>Discount</th>
                                                <th>Check Amount</th>
                                                <th>Total Quantity</th>
                                                <th>Total Cash</th> 
                                                <th colspan="2">Actions</th>
                                            </thead>
                                            <tbody> 
                                                @foreach ($customerSale as $customer_sale)
                                                    <tr class="text-center">
                                                        <td>{{$customer_sale->customer->name}}</td>
                                                        <td>{{$customer_sale->m_o_p->mode}}</td>
                                                        <td>{{$customer_sale->amount}}</td>
                                                        <td>{{$customer_sale->check_num}}</td>
                                                        <td>{{$customer_sale->check_date}}</td>
                                                        <td>{{$customer_sale->bankname}}</td>
                                                        <td>{{$customer_sale->discount}}</td>
                                                        <td>{{$customer_sale->check_amount}}</td>
                                                        <td>{{$customer_sale->total_quantity}}</td>
                                                        <td>{{$customer_sale->total_cash}}</td>
                                                        <td class="align-middle">
                                                            <a href="/customersales/{{$customer_sale->id}}"
                                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                                data-original-title="Edit user">
                                                                View
                                                            </a>
                                                        </td>
                                                        <td class="align-middle">
                                                            <a href="/customersales/{{$customer_sale->id}}/edit"
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
        {{-- <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Customer Info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['action' => 'CustomerSalesController@store', 'method' => 'POST']) !!}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Supplier's Name</label>
                            </div>
                            <select name="supplier_id" class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($suppliers as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Beverages Name" name="p_name" required>
                        </div>
                        <select name="category_id" class="custom-select" id="inputGroupSelect01">
                          <option selected>Select Category</option>
                          @foreach ($category as $category)
                          <option value="{{$category->id}}">{{$category->cat_name}}</option>
                          @endforeach
                      </select>
                      <!--  <div class="form-group">
                            <input class="form-control" placeholder="Category" name="cat_name" required>
                        </div> -->
                        <div class="form-group">
                            <input class="form-control" placeholder="Quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Price per Case" name="price_case" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Price per Solo" name="price_solo" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date Expiry" name="date_expire" required>
                        </div>
                        <div class="form-group">
                            <input type ="number"class="form-control" placeholder="Bad Order" name="badorder" required>
                        </div>
                       

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="save">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div> --}}

        </html>
    @endsection

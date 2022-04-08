@extends('layouts.app')
@section('content')

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <h2>
                        <center>KLP BEVERAGE TRADING</center>
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
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h5 class="m-2 font-weight-bold text-primary">Sales Invoice&nbsp;</h5>
                            </div>

                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="table-responsive">

                                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                                            <tr>
                                                <td>
                                                    <!-- Table 1 -->
                                                    {!! Form::open(['action' => 'PurchasesController@store', 'method' => 'POST']) !!}

                                                        <input type="hidden" name="orderID" value="{{$orderID}}">
                                                         <table> 
                                                     
                                                            <tr>
                                                                <td>
                                                                    <label>Purchase Order #</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="" value="0000{{$orderNumber}}" name="orderNumber"
                                                                        style="width: 200px;" readonly>
                                                                </td>
                                                            </tr>
                                                    
                                                            <tr>
                                                                <td>
                                                                    <label>Beverage Name</label>
                                                                <td colspan="2">
                                                                    <select name="beverage" style="width: 200px;">
                                                                        @if(count($beverages) > 0)
                                                                            @foreach ($beverages as $beverages_list)
                                                                                <option
                                                                                    value="{{ $beverages_list->id }}">
                                                                                    {{ $beverages_list->product_name }}
                                                                                </option>
                                                                            @endforeach
                                                                            <option disabled selected>-- Select Beverage  --
                                                                            </option>
                                                                        @else
                                                                            <option disabled selected>-- Select Beverage --
                                                                            </option>
                                                                        @endif
                                                                    </select>
                                                                </td>
                                                                </select>
                                                    </td>
                                                    </tr>
                                                    
            
                                            <tr>
                                                <td>
                                                    <label>Category Name</label>
                                                <td colspan="2">
                                                    <select name="category" style="width: 200px;">
                                                        @if (count($categories) > 0)
                                                            @foreach ($categories as $category)
                                                                <option
                                                                    value="{{ $category->id }}">
                                                                    {{ $category->cat_name }}
                                                                </option>
                                                            @endforeach
                                                            <option disabled selected>-- Select Category  --
                                                            </option>
                                                        @else
                                                            <option disabled selected>-- Select Category --
                                                            </option>
                                                        @endif
                                                    </select>
                                                </td>
                                                </select>
                                </td>
                            </tr>


                                            <tr>
                                                <td>
                                                    <label>Quantity(Cases)</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="case" style="width: 200px;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <button type="submit" class="btn btn-primary" name="save">Add</button>
                                                </td>
                                            </tr>

                                            </tr>
                                        </table>
                                        {!! Form::close() !!}
                                        <!-- end of Table 1 -->
                                        </td>
                                        </tr>
                                        </table>
                                    </div>

                                    <div class="container">

                                        <div class="card-header py-3">
                                            <h4 class="m-2 font-weight-bold text-primary">Purchase Details&nbsp;</h4>
                                        </div>

                                        <table class="table " id="Datatables" width="100%" cellspacing="0">
                                            <tr>
                                                <td>
                                                    <!-- Table 1 -->
                                                    <table>
                                                        <tr>
                                                            <th>Beverage Name</th>
                                                            <th>Category</th>
                                                            <th>Quantity (Case)</th>
                                                            <th>Price Per Case</th>
                                                            <th>Price Per Solo</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>

                                                        @foreach ($purchases as $purchase)
                                                            <tr>
                                                                <td>{{$purchase->beverage->product_name}}</td>
                                                                <td>{{$purchase->category->cat_name}}</td>
                                                                <td>{{$purchase->quantity}}</td>
                                                                <td>{{$purchase->beverage->price_case}}</td>
                                                                <td>{{$purchase->beverage->price_solo}}</td>
                                                                <td>{{$purchase->total}}</td>
                                                                <td><a href="SalesInvoiceController@destroy?delete=<php echo $row['pur_id']; ?>"
                                                                        class="btn btn-danger" style="width: 90px;">Cancel</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach



                                                        {{-- <php //endwhile;
                                                        ?> --}}


                                                    </table>
                                                    <!-- end of Table 1 -->
                                                </td>



                                                <td>
                                                    <table border="1">

                                                        <!-- Table 2 -->
                                                        <tr>
                                                            <th colspan="2">Customer Name</th>
                                                        </tr>
                                                        <tr>
                                                            <form action="purchased/0" method="GET">
                                                                <td colspan="2">
                                                                    <select name="customer" style="width: 200px;">
                                                                        @if(count($customers) > 0)
                                                                            @foreach ($customers as $customer)
                                                                                <option value="{{ $customer->id }}">
                                                                                    {{ $customer->name }}</option>
                                                                            @endforeach
                                                                            <option disabled selected>-- Select Customer --
                                                                            </option>
                                                                        @else
                                                                            <option disabled selected>-- Select Customer --
                                                                            </option>
                                                                        @endif
                                                                    </select>   
                                                                    <a href="#myModal" r    ole="button"
                                                                        class="btn btn-md btn-primary"
                                                                        data-bs-toggle="modal"  
                                                                            class=""></i>ADD</a>
                                                                </td>
                                                        </tr>

                                                        <tr>
                                                            <th colspan="2">Mode of Payment</th>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <select name="mop" style="width: 200px;">
                                                                    @if (count($m_o_p_s) > 0)
                                                                        @foreach ($m_o_p_s as $bayadform)
                                                                            <option value="{{ $bayadform->mode }}">
                                                                                {{ $bayadform->mode }}</option>
                                                                        @endforeach
                                                                        <option disabled selected>-- Select Payment --
                                                                        </option>
                                                                    @else
                                                                        <option disabled selected>-- Select Payment --
                                                                        </option>
                                                                    @endif
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th colspan="2">Summary</th>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <label>Grand Total</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" border="none" value="{{$grandTotal}}" name="gtotal"
                                                                    id="txt1" style="width: 200px;" readonly>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2">
                                                                <button type="submit" class="btn btn-primary"
                                                                     style="width: 90px;">
                                                                    <center>Proceed</center>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        </form>
                                                    </table>
                                                    <!-- end of Table 2 -->
                                                </td>


                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div><!-- .animated -->
    </div><!-- .content -->
    <!--/.col-->
    <!-- Right Panel -->


    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="CustomersController@store">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="custname" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="custadd" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Contact Number" name="custnum" required>
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
@endsection

@extends('layouts.app');
@section('content')
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Datatable</title>
<link rel="stylesheet" type="text/css" href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">



<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <h2>
                    <center>KLP BEVERAGES TRADING</center>
                </h2>

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
                                <h4 class="m-2 font-weight-bold text-primary">Stocks Inventories&nbsp;</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered data-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Product Name</th>
                                                <th>Category ID</th>
                                                <th>Quantity</th>
                                                <th>Date Expire</th>
                                                <th>Bad Order</th>
                                                <th>Actions</th>
                                            </tr>
                                            
                                        </thead>
                                             <tbody>
                                            </tbody>
                                    </table>
                                    
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->
        <!--/.col-->
        <script type="text/javascript">
            $(function () {
                
              var table = $('.data-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('inventories.index') }}",
                  columns: [
                      {data: 'id', name: 'id'}
                      {data: 'product_name', name: 'product_name'}
                      {data: 'category_id', name: 'category_id'}
                      {data: 'quantity', name: 'quantity'}
                      {data: 'date_expire', name: 'date_expire'},
                      {data: 'badorder', name: 'badorder'},
                      {data: 'action', name: 'action', orderable: false, searchable: false},
                  ]
              });
                
            });
          </script>


@endsection
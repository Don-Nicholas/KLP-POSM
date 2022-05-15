
@extends('layouts.app')
@section('content')
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-10">
                <h2>
                    <center>KLP BEVERAGE TRADING</center>
                </h2>

            </div>

        </div>
</div>
{{-- end of HEADER --}}
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h3 class=""m-2 font-weight-bold text-primary>Account Payables Information&nbsp;
                    <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-bs-toggle="modal">
                            ADD</a>
                </h3>
            </div>
<div class="clearfix"></div>
<div class="table-stats order-table ov-h">
    <table class="table ">
        <thead>
            <tr>
                <th>NO</th>
                <th>Customer Name</th>
                <th>Bank Name</th>
                <th>Check Number</th>
                <th>Amount Due</th>
                <th>Check Amount</th>
                <th>Post Date</th>
                <th>Status</th>
                <th><center>Actions</center></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($payables as $payable)
                <tr>
                    <td class="serial">{{ $payable->id }}</td>
                
                    <td>
                         <span class="name">{{ $payable->customer->name }}</span>
                    </td>
                    <td> 
                        <span class="name">{{ $payable->bank_name }}</span>
                    </td>
                    <td>
                        <span class="count">{{ $payable->check_number }}</span></td>
                    <td> 
                        <span class="name">{{ $payable->total_purchase }}</span>
                    </td>
                    <td>
                         <span class="name">{{ $payable->check_amount }}</span>
                    </td>
                    <td><span class="count">{{ $payable->check_postdate }}</span></td>
    
                    <td>
                        <span class="badge badge-complete">Complete</span>
                    </td>
                    <td class="align-middle">
                        <a href="/payables/{{ $payable->id }}" class="btn btn-primary mx-2"
                            data-toggle="tooltip" data-original-title="Edit user">
                            View
                        </a>
                    </td>

                    <td class="align-middle">
                        <a href="/employees/{{ $payable->id }}/edit" class="btn btn-primary mx-2"
                            data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> <!-- /.table-stats -->
</div>


@endsection

@extends('layouts.app')
@section('content')

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                 <h2> <center>KLP BEVERAGES TRADING</center></h2>
   
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <strong style="color: #007bff;" class="mt-2">Welcome!</strong> &nbsp;
                        </a>

                        <div class="user-menu dropdown-menu">
 <!--                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a> -->

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

       

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
				
<div class ="container">
		
<div class="content">
 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Account Payables&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                {!! Form::open(['action' => 'AccountPayables@store', 'method' => 'POST']) !!}
                <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Purchase No.
                        </th>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer's Name
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Contact Number</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Amount Due</th>
                            <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                To Pay</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                  Bank Name</th>
                              <th
                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                  Purchase Date</th>
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
     
                    <tbody>
                      @if (count($payabless) > 0)
                          @foreach ($payables as $payables)
                              <tr>
                                  <td>
                                      <div class="d-flex px-2 py-1">
                                          <div>
                                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                  alt="user1">
                                          </div>
                                          <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$payables->id}}</h6>
                                        </div>
                                          <div class="d-flex flex-column justify-content-center">
                                              <h6 class="mb-0 text-sm">{{$payables->name}}</h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <p class="text-xs font-weight-bold mb-0">{{$payables->contact}}</p>
                                  </td>
                                  {{-- amount due --}}
                                  <td class="align-middle text-center text-sm">
                                      <span class="badge badge-sm bg-gradient-success">{{$payables->total}}</span>
                                  </td>
                                  {{-- to pay --}}
                                   <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $payables->total }}</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $payables->bank_name }}</span>
                                </td>
                                {{-- purchase date or transaction date --}}
                                <td class="align-middle text-center">
                                  <span
                                      class="text-secondary text-xs font-weight-bold">{{ $payables->date_purchase }}</span>
                              </td>
                                  <td class="align-middle">
                                      <a href="/payables/{{ $payables->id }}"
                                          class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                          data-original-title="Edit user">
                                          View
                                      </a>
                                  </td>
                                  <td class="align-middle">
                                      <a href="/payables/{{ $suppliers->id }}/view"
                                          class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                          data-original-title="Edit user">
                                          VIEW
                                      </a>
                                  </td>
                                  <td class="align-middle">
                                    <a href="/payables/{{ $suppliers->id }}/edit"
                                        class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        RECEIVED
                                    </a>
                                </td>
                                <td class="align-middle">
                                  <a href="/payables/{{ $suppliers->id }}/edit"
                                      class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                      data-original-title="Edit user">
                                      OVER DUE
                                  </a>
                              </td>
                              </tr>
                          @endforeach
                      @else
                          <h1>No Account's Payables with Information.</h1>
                      @endif
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
    

    <!-- Right Panel -->


  
    @endsection
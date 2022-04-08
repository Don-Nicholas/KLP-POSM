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

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
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


        <div class="row show-grid">
            <!-- Customer ROW -->
            <div class="col-md-3">
                <!-- Customer record -->
                <div class="col-md-12 mb-3">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-0">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Customers</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supplier record -->
                <div class="col-md-12 mb-3">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-0">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Supplier</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- col-md-3 -->


            <!-- Employee ROW -->
            <div class="col-md-3">
                <!-- Employee record -->
                <div class="col-md-12 mb-3">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-0">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Employees</div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User record -->
                <div class="col-md-12 mb-3">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-0">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Registered Account
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- col-md-3 -->

            <!-- PRODUCTS ROW -->
            <div class="col-md-3">
                <!-- Product record -->
                <div class="col-md-12 mb-3">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">

                                <div class="col mr-0">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Products</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- col-md-3 -->


            <!-- RECENT PRODUCTS -->
            <div class="col-lg-3">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">

                            <div class="col-auto">
                                <i class="fa fa-th-list fa-fw"></i>
                            </div>

                            <div class="panel-heading"> Recent Products
                            </div>
                            <div class="row no-gutters align-items-center mt-1">
                                <div class="col-auto">
                                    <div class="h6 mb-0 mr-0 text-gray-800">
                                        <!-- /.panel-heading -->

                                        <div class="panel-body">
                                            <div class="list-group">

                                            </div>
                                            <!-- /.list-group -->
                                            <a href="inventory2.php" class="btn btn-default btn-block">View All Products</a>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


           

            </div>
            <!--col-lg-3-->


        </div><!-- show grid -->
    </div><!-- Right Panel -->





    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
@endsection

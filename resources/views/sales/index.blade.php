@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    



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
                            <strong style="color: #007bff;" class="mt-2">Welcome!
                                </strong> &nbsp;
                        </a>

                        <div class="user-menu dropdown-menu">
                            <!--    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

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

                    <div class="container">




                        <div id="Daily Sales" class="tabcontent">
                            <h2 class="page-header">Daily Sales</h2>
                            <canvas id="chartjs_bar" style="height: auto; width: 300px;"></canvas>


                        </div>



                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->
            <!--/.col-->


            <!-- Right Panel -->



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

            {{--  --}}

    </html>
@endsection

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
<?php 
	include 'header/main-header.php'; 
	//include('connection2.php');
	$myDate = date('Y-m-d');
	include('connection.php');
		$result = $mysqli->query("SELECT 
purchased.order_id,
purchased.quant,
category.cat_name,
product.p_name,
CONCAT_WS(' ', product.p_name, category.cat_name) as Name,
Sum(purchased.quant) AS total
FROM
purchased
INNER JOIN beverages ON purchased.b_id = beverages.b_id
INNER JOIN product ON beverages.p_id = product.p_id
INNER JOIN category ON beverages.c_id = category.c_id
group by Name
")or die ($mysqli->error);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Name']  ;
            $sales[] = $row['total'];
        }
?>




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
                        <strong style="color: #007bff;" class="mt-2">Welcome! <?= ucfirst($user_session) ;?></strong>
                        &nbsp;
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

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }



            var ctx = document.getElementById("chartjs_bar").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: < ? php echo json_encode($productname); ? > ,
                    datasets : [{
                        backgroundColor: [
                            "#5969ff",
                            "#ff407b",
                            "#25d5f2",
                            "#ffc750",
                            "#2ec551",
                            "#7040fa",
                            "#ff004e"
                        ],
                        data: < ? php echo json_encode($sales); ? > ,
                    }]
                },
                options: {
                    legend: {
                        display: true,
                        position: 'bottom',

                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },


                }
            });

        </script>

</html>

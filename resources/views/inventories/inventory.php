<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Datatable</title>
<link rel="stylesheet" type="text/css" href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

<?php 
	include 'header/main-header.php'; 
	include('connection.php');
	$result = $mysqli->query("SELECT
product.p_id,
product.p_name,
beverages.b_id,
beverages.p_id,
beverages.c_id,
beverages.quantity,
beverages.price_case,
beverages.price_solo,
beverages.date_rec,
beverages.date_exp,
beverages.d_date,
category.cat_name,
category.c_id
FROM
beverages
INNER JOIN product ON beverages.p_id = product.p_id
INNER JOIN category ON beverages.c_id = category.c_id order by beverages.quantity asc ") or die ($mysqli->error);
$arr_users = [];
if ($result->num_rows > 0) 
{
    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
}
?>


<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <h2>
                    <center>KLP BEVERAGES TRADING</center>
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

                <div class="container">

                    <div class="content">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="m-2 font-weight-bold text-primary">Stocks&nbsp;</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="userTable">
                                        <thead>

                                            <th>Beverage Name</th>
                                            <th>Category</th>
                                            <th>Cases</th>
                                            <th>Price Per Case</th>
                                            <th>Price Per Liter</th>

                                        </thead>
                                        <tbody>
                                            <?php if(!empty($arr_users)) { ?>
                                            <?php foreach($arr_users as $row) { ?>
                                            <tr>
                                                <td><?php echo $row['p_name'];?></td>
                                                <td><?php echo $row['cat_name'];?></td>
                                                <td><?php echo $row['quantity'];?></td>
                                                <td><?php echo $row['price_case'];?></td>
                                                <td><?php echo $row['price_solo'];?></td>

                                            </tr>
                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <script src="datatable/jquery.min.js"></script>
                                    <script type="text/javascript" src="datatable/jquery.dataTables.min.js"></script>

                                    <script>
                                        $(document).ready(function () {
                                            $('#userTable').DataTable();
                                        });

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->
        <!--/.col-->


        <!-- Right Panel -->


</html>

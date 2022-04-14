<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Customer's Information</title>
<link rel="stylesheet" type="text/css" href="datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="script/bootstrap.bundle.min.js"></script>

<?php 
	include 'header/main-header.php'; 
	include('connection.php');
	$result = $mysqli->query("SELECT * from customers
") or die ($mysqli->error);
$arr_users = [];
if ($result->num_rows > 0) {
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
                                <h4 class="m-2 font-weight-bold text-primary">Customer&nbsp;
                                    <a href="#myModal" role="button" class="btn btn-lg btn-primary"
                                        data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i></a>
                                </h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="userTable">
                                        <thead>

                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Contact#</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($arr_users)) { ?>
                                            <?php foreach($arr_users as $user) { ?>
                                            <tr>
                                                <td><?php echo $user['cus_name']; ?></td>
                                                <td><?php echo $user['cus_add']; ?></td>
                                                <td><?php echo $user['contact']; ?></td>
                                                <td><a href="CustomersController@update?update=<?php echo $user['cus_id'];?>"
                                                        class="fa fa-list" style="color:blue"></a></td>
                                                <td><a href="CustomersController@destroy?delete=<?php echo $user['cus_id'];?>"
                                                        class="fa fa-trash" style="color:red"></a></td>
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
        <!-- Button HTML (to Trigger Modal) -->

    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer's Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- <div class="modal-body">
                    <form role="form" method="post" action="process_customer.php">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="custname" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="custadd" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Contact Number" name="custnum" required>
                        </div> -->
                <div class="modal-body">
                    {!! Form::open(['action' => 'CustomersController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <input class="form-control" placeholder="Customer's Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Address" name="address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Contact Number" name="contact" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="save">Add</button>
                </div>
                <!-- </form> -->
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</html>

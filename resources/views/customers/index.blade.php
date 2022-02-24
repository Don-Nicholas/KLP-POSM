@extends('layouts.app')
@section('content')


<div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                  <h2> Point of Sale Monitoring System</h2>
   
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
		<div class="row justify-content-center">
            <div class="animated fadeIn">
                <div class="row">



   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Customer&nbsp;
                
			  <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i></a>
			</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">        
                  <thead>
                      <tr>
                        <th>Customer's Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                      </tr>
               
					<tr>
						<td>e</td>
						<td>e</td>
						<td>e</td>
						
			
						<td><a href="#"
								class="btn btn-primary bg-gradient-primary" style="width: 90px;">Details</a></td>
								
					</tr>
	
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
		

<!-- Button HTML (to Trigger Modal) -->
   
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                     <form role="form" method="post" action="process_customer.php">
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
</html>
@endsection
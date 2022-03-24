@extends('layouts.app')
@section('content')
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

                    <div class="container">

                        <div class="content">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-2 font-weight-bold text-primary">Beverages List&nbsp;
                                        <!-- MODAL for ADDING BEVERAGES-->
                                        <a href="#myModal" role="button" class="btn btn-lg btn-primary"
                                            data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i></a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="userTable">
                                            <thead>

                                                <th>Beverages Name</th>
                                                <th>Category</th>
                                                <th>Cases</th>
                                                <th>Price per Case</th>
                                                <th>Price per Solo</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($beverages as $beverage)
                                                    <tr>
                                                        <td>{{$beverage->product_name}}</td>
                                                        <td>{{$beverage->supplier_id}}</td>
                                                        <td>{{$beverage->quantity}}</td>
                                                        <td>{{$beverage->price_case}}</td>
                                                        <td>{{$beverage->price_solo}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- .animated -->
            </div><!-- .content -->

            <!-- .animated -->
        </div><!-- .content -->
        <!--/.col-->
        <!-- Modal HTML -->
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Beverages Info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['action' => 'BeveragesListsController@store', 'method' => 'POST']) !!}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Supplier's Name</label>
                            </div>
                            <select name="supplier_id" class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                @foreach ($suppliers as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Beverages Name" name="p_name" required>
                        </div>
                        <select name="supplier_id" class="custom-select" id="inputGroupSelect01">
                          <option selected>Select Category</option>
                          @foreach ($category as $category)
                          <option value="{{$category->cat_id}}">{{$category->cat_name}}</option>
                          @endforeach
                      </select>
                      <!--  <div class="form-group">
                            <input class="form-control" placeholder="Category" name="cat_name" required>
                        </div> -->
                        <div class="form-group">
                            <input class="form-control" placeholder="Quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Price per Case" name="price_case" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Price per Solo" name="price_solo" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date Expiry" name="date_expire" required>
                        </div>
                        <div class="form-group">
                            <input type ="number"class="form-control" placeholder="Bad Order" name="badorder" required>
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
    @endsection

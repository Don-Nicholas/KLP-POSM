@extends('layouts.app')
@section('content')
   
       <div id="right-panel" class="right-panel">
   
           <!-- Header-->
           <header id="header" class="header">
   
               <div class="header-menu">
   
                   <div class="col-sm-7">
                    <h2> <center>KLP BEVERAGE TRADING</center></h2>
      
                   </div>
   
                   <div class="col-sm-5">
                       <div class="user-area dropdown float-right">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <strong style="color: #007bff;" class="mt-2">Welcome!</strong> &nbsp;
                           </a>
   
                           <div class="user-menu dropdown-menu">
                           
    <!--  <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
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
    <div class="card shadow mb-4">
               <div class="card-header py-3">
                 <h5 class="m-2 font-weight-bold text-primary">Sales Invoice&nbsp;</h5>
               </div>
               
               <div class="card-body">
               <div class="row justify-content-center">
                 <div class="table-responsive">
                 
       <table class="table " id="dataTable" width="100%" cellspacing="0">
       <tr>
           <td>
           <!-- Table 1 -->
           <form action="process_purchase.php" method="POST">
               <table  >
                       
                   <tr>
                   <td>
                   <label>Purchase Order #</label>
                   </td>
                   <td>
                   <input type="text" value="4" name="ponum" style="width: 200px;" readonly>
                   </td>
                   </tr>
                       
                         <tr>
                           <td>
                           <label>Beverage Name</label>
                           </td>
                           
                           <td>
                           <select name="purchase" style="width: 200px;">
                       <option>-- Select --</option>
                   {{-- <?php 
   
//                        $result = $mysqli->query("SELECT
//    beverages.b_id,
//    beverages.p_id,
//    beverages.c_id,
//    beverages.quantity,
//    beverages.price_case,
//    beverages.price_solo,
//    beverages.date_rec,
//    beverages.date_exp,
//    beverages.d_date,
//    category.c_id,
//    category.cat_name,
//    product.p_id,
//    product.p_name
//    FROM
//    beverages
//    INNER JOIN category ON beverages.c_id = category.c_id
//    INNER JOIN product ON beverages.p_id = product.p_id 
//    ORDER BY product.p_name")
//                        or die($mysqli->error);
//                        while ($row = $result->fetch_assoc()):
//                            echo "<option value='" . $row['b_id'] . "'>" . $row['p_name'] ." " . $row['cat_name'] ."</option>";
//                        endwhile;
                       
                       ?> --}}
                       </select>
                       </td>
                       
                   <tr>
                   <td>
                   <label>Quantity(Cases)</label>
                   </td>
                   <td>
                   <input type="text" name="case" style="width: 200px;">
                   </td>
                   </tr>
                   
                   <tr>
                   <td>
                   <button type="submit" class="btn btn-primary" name="save">Add</button>
                   </td>
                   </tr>
                   
                   </tr>
            </table>
       </form>
               <!-- end of Table 1 -->
       </td>
       </tr>
   </table>
       </div>             
   
   <div class ="container">
{{--    
   <?php //include('connection.php');
//            $myDate = date('Y-m-d');
           
//            $result = $mysqli->query("SELECT
//    product.p_name,
//    category.cat_name,
//    purchase.pur_id,
//    purchase.total,
//    purchase.discount,
//    purchase.quant,
//    beverages.b_id,
//    beverages.price_case
//    FROM
//    purchase
//    INNER JOIN beverages ON purchase.b_id = beverages.b_id
//    INNER JOIN product ON beverages.p_id = product.p_id
//    INNER JOIN category ON beverages.c_id = category.c_id
//    ") or die ($mysqli->error);
           ?> --}}
            <div class="card-header py-3">
                 <h4 class="m-2 font-weight-bold text-primary">Purchase Details&nbsp;</h4>
               </div>
             
   <table class="table " id="dataTable" width="100%" cellspacing="0">
       <tr>
           <td>
           <!-- Table 1 -->
               <table  >
                   <tr>
                           <th>Beverage Name</th>
                           <th>Category</th>
                           <th>Quantity (Case)</th>
                           <th>Price Per Case</th>
                           <th>Total</th>
                           <th>Action</th>
                   </tr>
                   
                   <tr>
                           <td>e</td>
                           <td>e</td>
                           <td>e</td>
                           <td>e</td>
                           <td>e</td>
                           <td><a href="process_purchase.php?delete=d"
                                   class="btn btn-danger" style="width: 90px;">Cancel</a></td>
                       </tr>
                       
                   
         
            </table>
               <!-- end of Table 1 -->
                </td>
           
           
           
           <td>
               <table border ="1">
   
               <!-- Table 2 -->
                   <tr>
                           <th colspan="2">Customer Name</th>
                   </tr>
                    <tr>
                          <form action="process_mop.php" method="POST">
                           <td colspan="2">
                           <select name="customer" style="width: 200px;">
                           
                            @if (count($customers)>0)
                            @foreach ($customers as $customer)
                                <option value="{{$customer->name}}">{{$customer->name}}</option>
                            @endforeach
                            <option disabled selected>-- Select Customer --</option> 
                            @else
                            <option disabled selected>-- Select Customer --</option>
                            @endif
                           
                       
                   {{-- <?php 
   
                    //    $result3 = $mysqli->query("SELECT * FROM customer")
                    //    or die($mysqli->error);
                    //    while ($row = $result3->fetch_assoc()):
                    //    echo "<option value='" . $row['cus_id'] . "'>".$row['cus_name']."</option>";
                    //    endwhile;
                       
                       ?> --}}
                       </select>
                       <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-bs-toggle="modal"><i class="fas fa-fw fa-plus"></i></a>
                       </td>
                   </tr>
               
                   <tr>
                           <th colspan="2">Customer Name</th>
                   </tr>
               <tr>	
                           <td colspan="2">
                           <select name="mop" style="width: 200px;">
                            @if (count($m_o_p_s)>0)
                            @foreach ($m_o_p_s as $bayadform)
                                <option value="{{$bayadform->mode}}">{{$bayadform->mode}}</option>
                            @endforeach
                            <option disabled selected>-- Mode of Payment --</option> 
                            @else
                            <option disabled selected>-- Mode of Payment --</option>
                            @endif
                           
                     
                       
                   {{-- <?php 
   
                    //    $result3 = $mysqli->query("SELECT * FROM mop")
                    //    or die($mysqli->error);
                    //    while ($row = $result3->fetch_assoc()):
                    //    echo "<option value='" . $row['pay_id'] . "'>".$row['mode']."</option>";
                    //    endwhile;
                       
                       ?> --}}
                       </select>
                       </td>
                       </tr>
               
                   <tr>
                           <th colspan="2">Summary</th>
                   </tr>
                   
                   <tr>
                       <td>
                           <label>Grand Total</label>
                       </td>
                       <td>
                           <input type="text" border="none" value="4" name="gtotal" id="txt1"  style="width: 100px;" readonly>
                       </td>
                   </tr>	
                   
                   <tr>
                   <td colspan ="2">				
                   <button type="submit" class="btn btn-primary" name="purchased" style="width: 90px;" ><center>Proceed</center></button>
                   </td>
                   </tr>
                   </form>
               </table>
               <!-- end of Table 2 -->
           </td>
   
           
       </tr>
   </table>
   </div>
   </div>
   </div>
   
   </div>
   </div>
   </div>
   </div>
   
           </div>
           </div>
           </div><!-- .animated -->
           </div><!-- .content -->
           <!--/.col-->
           <!-- Right Panel -->
   
       
   <!-- Modal HTML -->
       <div id="myModal" class="modal fade" tabindex="-1">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Customer Info</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                   </div>
                   <div class="modal-body">
                        <form role="form" method="post" action="process_customerpurchase.php">
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
@endsection
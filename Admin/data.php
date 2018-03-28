<?php 
$title ="Data List";
include 'adm_header.php';
?>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            
              <li><a href="index.php" class="active"><i class="fa fa-dashboard"></i> 
                      <span>Dashboard</span></a></li>
            
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                
                <!-- getting Order Details -->
             <?php 
             if(isset($_REQUEST['order'])){
                 $o_table = mysql_query("SELECT * FROM t_order_user_det ORDER BY o_date DESC");
                ?> 
                 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Order data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>User Id</th>
                        <th>Order Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Landmark</th>
                        <th>Address</th>
                        <th>Zip</th>
                        <th>Total Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysql_fetch_array($o_table)) 
                            {
                        echo "<tr>";
                            echo"<td>{$row['o_date']}</td>";
                            echo"<td>{$row['u_id']}</td>";
                            echo"<td>{$row['o_id']}</td>";
                            echo"<td>{$row['o_name']}</td>";
                            echo"<td>{$row['o_email']}</td>";
                            echo"<td>{$row['o_mob']}</td>";
                            echo"<td>{$row['o_city']}</td>";
                            echo"<td>{$row['o_land']}</td>";
                            echo"<td>{$row['o_add']}</td>";
                            echo"<td>{$row['o_zip']}</td>";
                            echo"<td>{$row['o_ttl_amt']}</td>";
                        echo"</tr>";              
                          }
                      
                       ?> 
                        
                        
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Date</th>
                        <th>User Id</th>
                        <th>Order Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Landmark</th>
                        <th>Address</th>
                        <th>Zip</th>
                        <th>Total Amount</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div> 
             <?php
             }
             ?> 
              <!-- Order Details Ends -->
              
              <!-- Getting Customers Deatils -->
              
                <?php 
             if(isset($_REQUEST['customer'])){
                 $u_table = mysql_query("SELECT * FROM t_user");
                ?> 
                 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Customer data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Landmark</th>
                        <th>State</th>
                        <th>Address</th>
                        <th>Zip</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysql_fetch_array($u_table)) 
                            {
                        echo "<tr>";
                            echo"<td>{$row['u_id']}</td>";
                            echo"<td>{$row['u_name']}</td>";
                            echo"<td>{$row['u_email']}</td>";
                            echo"<td>{$row['u_mob']}</td>";
                            echo"<td>{$row['u_city']}</td>";
                            echo"<td>{$row['u_land']}</td>";
                            echo"<td>{$row['u_state']}</td>";
                            echo"<td>{$row['u_add']}</td>";
                            echo"<td>{$row['u_zip']}</td>";
                        echo"</tr>";              
                          }
                      
                       ?>                    
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Landmark</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Zip</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div> 
             <?php
             }
             ?> 
                <!-- Customers Details Ends -->
                
                <!-- Supplier Details Starts -->
                <?php 
             if(isset($_REQUEST['supplier'])){
                 $s_table = mysql_query("SELECT * FROM t_supplier ");
                ?> 
                 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Supplier data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Supplier Id</th>
                        <th>Admin Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Landmark</th>
                        <th>State</th>
                        <th>Address</th>
                        <th>Zip</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysql_fetch_array($s_table)) 
                            {
                        echo "<tr>";
                            echo"<td>{$row['s_id']}</td>";
                            echo"<td>{$row['a_id']}</td>";
                            echo"<td>{$row['s_name']}</td>";
                            echo"<td>{$row['s_email']}</td>";
                            echo"<td>{$row['s_mob']}</td>";
                            echo"<td>{$row['s_city']}</td>";
                            echo"<td>{$row['s_land']}</td>";
                            echo"<td>{$row['s_state']}</td>";
                            echo"<td>{$row['s_add']}</td>";
                            echo"<td>{$row['s_zip']}</td>";
                            
                        echo"</tr>";              
                          }
                      
                       ?>                    
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Supplier Id</th>
                        <th>Admin Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Landmark</th>
                        <th>State</th>
                        <th>Address</th>
                        <th>Zip</th>
                        
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div> 
             <?php
             }
             ?> 
              <!-- Supplier Details Ends -->
              
              <!-- Admin Details Starts -->
              
                <?php 
             if(isset($_REQUEST['admin'])){
                 $adm_table = mysql_query("SELECT * FROM t_admin");
                ?> 
                 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Admin data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Location</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysql_fetch_array($adm_table)) 
                            {
                        echo "<tr>";
                            echo"<td>{$row['a_name']}</td>";
                            echo"<td>{$row['a_mail']}</td>";
                            echo"<td>{$row['a_loc']}</td>";
                        echo"</tr>";              
                          }
                      
                       ?>                    
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Location</th>
                       
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div> 
             <?php
             }
             ?> 
                <!-- Admin Details Ends -->
                
                <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include 'footer.php'; ?>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>

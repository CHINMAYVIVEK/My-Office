<?php  
$title="Cart";
include'header.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../Admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../Admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
       
        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> My Office
                <small class="pull-right"><?php echo date("d-M-Y") ; ?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>My Office</strong><br>
                Varanasi<br>
                Uttar Pradesh<br>
                Phone: (0542) 123-4567<br>
                Email: sales@myoffice.com
              </address>
            </div><!-- /.col -->
            <?php 
              if(isset($_POST['inv_id']))
    {
                $user_id =  $_POST['inv_id'];
                $user_det = mysql_query("SELECT * FROM t_user WHERE u_id='$user_id'");
                while ($row = mysql_fetch_array($user_det)) 
                    {
                   
                       echo"<div class='col-sm-4 invoice-col'>
                                 To
                                <address>
                                     <strong>{$row['u_name']}</strong><br>
                                     {$row['u_add']} Near {$row['u_land']} <br>
                                     {$row['u_city']},{$row['u_state']},Pin {$row['u_zip']}<br>
                                     Contact: {$row['u_mob']}<br>
                                     Email: {$row['u_email']}
                                </address>
                            </div><!-- /.col -->";
                   }
                   
                   
?>       
            <div class="col-sm-4 invoice-col">
              <b>Invoice #007612</b><br>
              <br>
              <b>Order ID:</b> 4F3S8J<br>
              <b>Payment Due:</b> 2/22/2014<br>
              <b>Account:</b> 968-34567
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>  
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
            <?php
            $count = 1;
            $cart_product = mysql_query("SELECT * FROM t_cart WHERE u_id = '$user_id'");
            while ($row1 = mysql_fetch_array($cart_product)) 
                
            {
                    $sub = $row1['c_p_qty']* $row1['p_price'];   
                echo"<tr>
                    <td> $count  </td> 
                    <td>{$row1['c_p_qty']}</td>
                    <td>{$row1['p_name']}</td>
                    <td>{$row1['p_price']}</td>
                    <td>Rs.$sub</td>
                  </tr> ";
                $count = $count+1;
            }
                  
    }
?>              
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
      
          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <img src="../Admin/dist/img/credit/visa.png" alt="Visa">
              <img src="../Admin/dist/img/credit/mastercard.png" alt="Mastercard">
              <img src="../Admin/dist/img/credit/american-express.png" alt="American Express">
              <img src="../Admin/dist/img/credit/paypal2.png" alt="Paypal">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead"><?php echo date("d-M-Y") ; ?></p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$250.30</td>
                  </tr>
                  <tr>
                    <th>Tax (9.3%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <?php 
      include '../Admin/footer.php';
      ?>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../Admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../Admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Admin/dist/js/demo.js"></script>
  </body>
</html>

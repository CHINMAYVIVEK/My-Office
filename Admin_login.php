
<?php 
	
	//Include database connection details
	require_once('includes/connection.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | My Office</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="Admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="Admin/dist/css/skins/_all-skins.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper hold-transition skin-blue sidebar-mini">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin &nbsp;</b>My Office</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          
        </nav>
      </header>
      
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
            <!-- right column -->
            <div class="col-md-3">
                
            </div>
            
            <div class="col-md-6" style="margin-top: 10%;">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Admin Login :: My Office</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="admin_auth.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" 
                                 placeholder="Email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" 
                                 placeholder="Password" name="pwd">
                      </div>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                      <button type="submit" class="btn btn-info " name="adm_login">Sign in</button>
                      <button type="reset" class="btn btn-default pull-right">Cancel</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <!-- general form elements disabled -->
            </div>
            
        </div>
    </div>
      
           
      
    <!-- jQuery 2.1.4 -->
    <script src="Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="Admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="Admin/dist/js/demo.js"></script>
  
            
      </body>
</html>



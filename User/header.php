<?php 
 session_start();
    include ('../includes/connection.php');
  
  if(!isset($_SESSION['USR_SESS_MEMBER_ID']) || (trim($_SESSION['USR_SESS_MEMBER_ID']) == '')) 
      {
        echo '<script language="javascript">';
        echo 'alert("Please Login to Continue..."); location.href="../login.php"';
        echo '</script>';
      } 
     $id = $_SESSION['USR_SESS_MEMBER_ID'];
     $usr_name= $_SESSION['USR_SESS_MEMBER_NAME']  ;
    $usr_email =$_SESSION['USR_SESS_MEMBER_EMAIL']; 
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo "$title :: My Office";?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
    <!-- iCheck -->
    <link rel="stylesheet" href="../Admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../Admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../Admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/jquery1.min.js"></script>
<!-- start menu -->
<link href="../css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="../css/fwslider.css" media="all">
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/css3-mediaqueries.js"></script>
    <script src="../js/fwslider.js"></script>
<!--end slider -->
<script src="../js/jquery.easydropdown.js"></script>
<script type="text/javascript" src="../js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- start details -->
<script src="../js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<link rel="stylesheet" href="../css/etalage.css">
<script src="../js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 360,
					thumb_image_height: 360,
					source_image_width: 900,
					source_image_height: 900,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>	
</head>
<body>
     <div class="header-top">
	   <div class="wrap"> 
			  
			 <div class="cssmenu">
                             <ul> <?php echo "<li><a href=\"usr_profile.php?usr_id=$id\"> Profile</a></li> |"; ?>
				         <li><a href="signout.php">Log Out</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="../images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">Home</a></li>
                        <li><a class="color4" href="veg.php">Explore Products</a></li>				
                        <li><a class="color6" href="about.php">About</a></li>
                        
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">
             
             <form action="veg.php" method="get">
                 <input type="text" class="textbox" name ="name" placeholder="search" required="">
                 <input type="submit" id="submit" name="search" value="Search" >
				<div id="response"> </div>
             </form>		
        </div>
	  <div class="tag-list">
              <!--
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>
		-->
	    <ul class="last">
                <li>
                    <a href="cart.php">
                        <?php 
                              $cart = mysql_query("SELECT * FROM t_cart WHERE u_id = '$id'");
                              $cart_item = mysql_num_rows($cart);
                             echo "Cart($cart_item) items";
                        ?>
                    </a>
                </li>
            </ul>
              
              <ul class="icon1 sub-icon1 profile_img">
                  <li><a class="active-icon c2" href="cart.php"> </a>
				<ul class="sub-icon1 list">
                                    
					<li>
                                            <h3>
                                                <?php if($cart_item<=0) 
                                                    echo"No Products";
                                                ?>
                                            </h3>
                                            <a href=""></a>
                                            
                                        </li>
                                        
					<li>
                                            <p>  
                                        
                                        
                                                
                                                
                                                <?php /*
                                                        echo "<table border='2'>
                                                    <thead>
                                                        <tr>
                                                            <th> Name </th>
                                                            <th> Price </th>
                                                            <th> Quantity </th>
                                                            <th> Total Price </th>
                                                           
                                                        </tr>
                                                    </thead>
                                                ";
                                                        
                                                    while ($row2 = mysql_fetch_array($cart)) {
                                                       
                                                        $p_pri =  $row2['p_price'];
                                                        $p_qt =  $row2['c_p_qty'];
                                                      $ttl = $p_pri*$p_qt;
                                                        echo "<tbody>
                                                        <tr>
                                                            <td> {$row2['p_name']} </td>
                                                            <td> Rs. $p_pri </td>
                                                            <td> $p_qt </td>
                                                            <td> Rs. $ttl </td>
                                                           
                                                        </tr>
                                                    </tbody>";
                                                   }
                                                   echo "</table>"; */
                                                ?>
                                                  
                                                <a href="">CheckOut</a>
                                            </p>
                                        </li>
                                        
				</ul>
			</li>
		</ul>
              
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>

<?php
$title ="User Panel";
include 'header.php';
?>
<?php 


?>
 
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Profile
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
           
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#profile" data-toggle="tab">Profile Settings</a></li>
                  <li><a href="#pwd_setting" data-toggle="tab">Password Settings</a></li>
                 
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="profile">
                    <!-- The profile Settings Form -->
    <?php 
    if(isset($_GET['usr_id'])){
  $usr_id = $_GET['usr_id'];
$usr_profile = mysql_query("SELECT * FROM t_user WHERE u_id='$usr_id'");
  
while ($row = mysql_fetch_array($usr_profile)) { ?>
                    
<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <?php  
        echo"<div class='form-group'>";
            echo"<label for='inputName' class='col-sm-2 control-label'>Name</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='text' class='form-control' id='inputName' placeholder='Name'
                                 name='usr_name' value='{$row['u_name']}'>";
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo"<label for='inputEmail' class='col-sm-2 control-label'>Email</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='email' class='form-control' id='inputEmail' placeholder='Email'
                                 name='usr_email' value='{$row['u_email']}' readonly>";
            echo"</div>";
        echo" </div>";
        
        echo"<div class='form-group'>";
            echo"<label for='inputName' class='col-sm-2 control-label'>Password</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='password' class='form-control' id='inputPassword3' 
                    placeholder='Enter Password for A/C Confirmation'name='usr_pwd' value=''>";
            echo"</div>";
        echo"</div>";
                      
        echo"<div class='form-group'>";
            echo"<label for='inputSkills' class='col-sm-2 control-label'>Mobile</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='number' class='form-control' id='inputLocation' placeholder='Location'
                                 name='usr_loc' value='{$row['u_mob']}'>";
            echo"</div>";
        echo"</div>";
        
          echo"<div class='form-group'>";
            echo"<label for='inputName' class='col-sm-2 control-label'>City</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='text' class='form-control' id='inputName' placeholder='City'
                                 name='usr_name' value='{$row['u_city']}'>";
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo"<label for='inputEmail' class='col-sm-2 control-label'>Landmark</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='text' class='form-control' id='inputEmail' placeholder='Landmark'
                                 name='usr_email' value='{$row['u_land']}'>";
            echo"</div>";
        echo" </div>";
                
        echo"<div class='form-group'>";
            echo"<label for='inputSkills' class='col-sm-2 control-label'>State</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='text' class='form-control' id='inputLocation' placeholder='Enter State'
                                 name='usr_loc' value='{$row['u_state']}'>";
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo"<label for='inputSkills' class='col-sm-2 control-label'>Address</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='text' class='form-control' id='inputLocation' 
                    placeholder='Enter Address'name='usr_loc' value='{$row['u_add']}'>";
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo"<label for='inputSkills' class='col-sm-2 control-label'>Zip</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='number' class='form-control' id='inputLocation' placeholder='Pin Code'
                                 name='usr_loc' value='{$row['u_zip']}'>";
            echo"</div>";
        echo"</div>";
                      
        echo"<div class='form-group'>";
            echo"<div class='col-sm-offset-2 col-sm-10'>";
                echo"<button type='submit' class='btn btn-danger' name='usr_update'>Update</button>";
            echo"</div>";
        echo"</div>"; ?>
</form>
 <?php
 }

    }
    
    ?>                
                
    <?php 
if (isset($_POST['usr_update']))
{
    function clean($str) 
    {
		$str = @trim($str);
		if(get_magic_quoteu_gpc()) {$str = stripslashes($str);}
		return mysql_real_escape_string($str);
    }
        $usr_name = clean($_POST['usr_name']);
        $usr_email = clean($_POST['usr_email']);
        $usr_pwd = clean($_POST['usr_pwd']);
        $usr_loc = clean($_POST['usr_loc']);
     
    $usr_profile1 = mysql_query("SELECT * FROM t_usrin WHERE a_mail='$usr_email' AND a_pwd='$usr_pwd'");
     if($usr_profile1){
         
         $usr_update = mysql_query("UPDATE t_usrin SET a_name = '$usr_name', a_loc ='$usr_loc'");
         
         if($usr_update ) {
               echo '<script language="javascript">';
               echo 'alert("Record Successfully updated"); location.href="signout.php"';
                echo '</script>';
            }
            
            else { ?>
                  <script language="javascript">
               alert('<?php die(mysql_error()) ?>'); location.href="signout.php"
               </script>
                    
           <?php }
     }
     else { ?>
                  <script language="javascript">
               alert('<?php die(mysql_error()) ?>'); location.href="signout.php"
               </script>
                    
           <?php }
}
    
    ?>                
                      
                  </div><!-- /.tab-pane -->
                  
<!-- ---------------------------------------------------------------------------------------------------- -->                  
                  
                  <div class="tab-pane" id="pwd_setting">
                    <!-- The Password Setting Form -->
    <?php 
    if (isset($_GET['usr_id'])){
        $usr_id = $_GET['usr_id'];
$usr_profile = mysql_query("SELECT * FROM t_usrin WHERE a_mail='$usr_id'");
  
while ($row = mysql_fetch_array($usr_profile)) {?>
        
<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    
<?php   echo"<div class='form-group'>";
            echo"<label for='inputName' class='col-sm-2 control-label'>Current Password</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='password' class='form-control' id='inputName' 
                       placeholder='Current Password'name='usr_pwd0'>";
            echo"</div>";
        echo"</div>";
        
        echo" <div class='form-group'>";
            echo"<label for='inputEmail' class='col-sm-2 control-label'>New Password</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='password' class='form-control' id='inputEmail' 
                          placeholder='New Password' name='usr_pwd1'> ";
            echo"</div>";
        echo"</div>";
        
        echo"<div class='form-group'>";
            echo"<label for='inputName' class='col-sm-2 control-label'>Confirm Password</label>";
            echo"<div class='col-sm-10'>";
                echo"<input type='password' class='form-control' id='inputName'
                       placeholder='Confirm Password' name='usr_pwd2'>";
            echo"</div>";
        echo"</div>";
                      
        echo"<div class='form-group'>";
            echo"<div class='col-sm-offset-2 col-sm-10'>";
                echo"<button type='submit' class='btn btn-danger' name='usr_pwd_update'>Update</button> ";
            echo"</div>";
        echo"</div>";
     ?>   
</form>
<?php    
}
    }
    ?>
            
     <?php 
if (isset($_POST['usr_pwd_update']))
{
    function clean($str) 
    {
		$str = @trim($str);
		if(get_magic_quoteu_gpc()) {$str = stripslashes($str);}
		return mysql_real_escape_string($str);
    }
        $usr_pwd0 = clean($_POST['usr_pwd0']);
        $usr_pwd1 = clean($_POST['usr_pwd1']);
        $usr_pwd2 = clean($_POST['usr_pwd2']);
     
     if(strcasecmp($usr_pwd1, $usr_pwd2)==0){
         
         $usr_profile1 = mysql_query("SELECT * FROM t_usrin WHERE a_mail='$usr_email' AND a_pwd='$usr_pwd0'");
     
         if($usr_profile1){
         
         $usr_update = mysql_query("UPDATE t_usrin SET a_pwd = '$usr_pwd1'");
         if($usr_update ) {
               echo '<script language="javascript">';
               echo 'alert("Password Successfully updated"); location.href="signout.php"';
                echo '</script>';
            }
            
            else { ?>
                  <script language="javascript">
               alert('<?php die(mysql_error()) ?>'); location.href="signout.php"
               </script>
                    
           <?php }
     }
      else { ?>
                  <script language="javascript">
               alert('<?php die(mysql_error()) ?>'); location.href="signout.php"
               </script>
                    
           <?php }
     }
     else { ?>
                  <script language="javascript">
               alert('<?php die(mysql_error()) ?>'); location.href="signout.php"
               </script>
                    
           <?php }
}
    
    ?>        
                    
                  </div><!-- /.tab-pane -->

                  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <?php include 'footer.php'; ?>

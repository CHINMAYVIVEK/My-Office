
<?php 
    session_start();
    include ('includes/connection.php');
    
   if (isset($_POST['sup_login']))
       {
       
       //Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$supp_mail = clean($_POST['email']);
	$supp_pwd = clean($_POST['pwd']);
        
        // Encrypting Password for Security
        //$final_pwd = md5($adm_pwd);
	//Create query
	      
        $result=mysql_query("SELECT * FROM t_supplier WHERE s_email='$supp_mail' AND s_pwd='$supp_pwd'");
        
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			
			$supp_member = mysql_fetch_assoc($result);
			$_SESSION['SUPP_SESS_MEMBER_ID'] = $supp_member['s_id'];
			$_SESSION['SUPP_SESS_MEMBER_NAME'] = $supp_member['s_name'];
                        $_SESSION['SUPP_SESS_MEMBER_EMAIL'] = $supp_member['s_email'];
			session_regenerate_id();
			session_write_close();
			echo '<script language="javascript">';
                        echo 'alert("Login Successfull"); location.href="Supplier/index.php"';
                        echo '</script>';
		}else { 
			//Login failed 
                    ?>
			<script language="javascript">
                        alert('<?php die(mysql_error()); ?>'); location.href="Admin_login.php";
                        </script>
                        <?php
		}
	}else { 
			//Login failed 
                    ?>
			<script language="javascript">
                        alert('<?php die(mysql_error()); ?>'); location.href="login.php";
                        </script>
                        <?php
		}
   }

 else { 
			
                    ?>
			<script language="javascript">
                        alert('<?php die(mysql_error()); ?>'); location.href="Admin_login.php";
                        </script>
                        <?php
		}

  ?>
 


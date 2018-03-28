
<?php 
    session_start();
    include ('includes/connection.php');
    
   if (isset($_POST['adm_login']))
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
	$adm_mail = clean($_POST['email']);
	$adm_pwd = clean($_POST['pwd']);
        
        // Encrypting Password for Security
        //$final_pwd = md5($adm_pwd);
	//Create query
	      
        $result=mysql_query("SELECT * FROM t_admin WHERE a_mail='$adm_mail' AND a_pwd='$adm_pwd'");
        
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			
			$adm_member = mysql_fetch_assoc($result);
			$_SESSION['ADMIN_SESS_MEMBER_ID'] = $adm_member['a_mail'];
			$_SESSION['ADMIN_SESS_MEMBER_NAME'] = $adm_member['a_name'];
                        $_SESSION['ADMIN_SESS_MEMBER_LOC'] = $adm_member['a_loc'];
			session_regenerate_id();
			session_write_close();
			echo '<script language="javascript">';
                        echo 'alert("Login Successfull"); location.href="Admin/index.php"';
                        echo '</script>';
		}else { 
			//Login failed 
                    ?>
			<script language="javascript">
                        alert("Login failed"); location.href="Admin_login.php";
                        </script>
                        <?php
		}
	}
        
        else {
		die("Query failed");
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
 


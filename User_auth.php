<?php 
session_start();
    include ('includes/connection.php');

if (isset($_POST['usr_login']))
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
	$usr_mail = clean($_POST['email']);
	$usr_pwd = clean($_POST['pwd']);
        
        // Encrypting Password for Security
        //$usr_pwd = md5($usr_pwd);
	//Create query
	      
        $result=mysql_query("SELECT * FROM t_user WHERE u_email='$usr_mail' AND u_pwd='$usr_pwd'");
      
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			
			$usr_member = mysql_fetch_assoc($result);
			$_SESSION['USR_SESS_MEMBER_ID'] = $usr_member['u_id'];
			$_SESSION['USR_SESS_MEMBER_NAME'] = $usr_member['u_name'];
                        $_SESSION['USR_SESS_MEMBER_EMAIL'] = $usr_member['u_email'];
			session_regenerate_id();
			session_write_close();
			echo '<script language="javascript">';
                        echo 'alert("Login Successfull"); location.href="User/index.php"';
                        echo '</script>';
		}else { 
			//Login failed 
                    ?>
			<script language="javascript">
                        alert("Login failed"); location.href="login.php";
                        </script>
                        <?php
		}
	}else { 
			//Login failed 
                    ?>
			<script language="javascript">
                        alert("error in Query execution"); location.href="login.php";
                        </script>
                        <?php
		}
   }

 else { 
			
                    ?>
			<script language="javascript">
                        alert("Error in connection"); location.href="login.php";
                        </script>
                        <?php
		}

?>

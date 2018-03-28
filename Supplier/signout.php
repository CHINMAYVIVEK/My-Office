<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SUPP_SESS_MEMBER_ID']);
	unset($_SESSION['SUPP_SESS_MEMBER_NAME']);
        unset( $_SESSION['SUPP_SESS_MEMBER_EMAIL']);
      
       echo '<script language="javascript">';
        echo 'alert("Successfully Logout"); location.href="../Supp_login.php"';
        echo '</script>';
?>

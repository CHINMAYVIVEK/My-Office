<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['USR_SESS_MEMBER_ID']);
	unset($_SESSION['USR_SESS_MEMBER_NAME']);
        unset($_SESSION['USR_SESS_MEMBER_LOC']);
      
       echo '<script language="javascript">';
        echo 'alert("Successfully Logout"); location.href="../index.php"';
        echo '</script>';
?>

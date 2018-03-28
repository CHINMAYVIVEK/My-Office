<?php 
	
	//Include database connection details
	require_once('includes/connection.php');
?>

<?php 
$title="User Login";
include'header.php';
?>
        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">New Customers</h4>
					<p>Follow the link and get an Account in My Ofice</p>
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Create an Account"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					<div id="loginbox" class="loginbox">
                                            <form action="User_auth.php" method="post" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
						      <input id="modlgn_username" type="email" name="email" 
                                                             class="inputbox" size="18" >
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
						      <input id="modlgn_passwd" type="password" name="pwd" 
                                                             class="inputbox" size="18" >
						    </p>
						    <div class="remember">
                                                        <input type="submit" name="usr_login" class="button" value="Login">
                                                        
							    
                                                            <div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
     <?php 
   include 'includes/footer.php';
   ?>



</body>
</html>

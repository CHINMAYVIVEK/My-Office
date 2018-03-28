<?php 
$title="User Registration";
include'header.php';
?>
          <div class="register_account">
          	<div class="wrap">
                   <span> <h4 class="title">Create an Account  </h4>All fields are required</span>
              
                   <form method="post" action="reg_user.php">
    			<div class="col_1_of_2 span_1_of_2">
                             <div><input name="name"  type="text" placeholder="Name" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Name';}" required=""></div>
                             <div><input name="e_mail"type="text"  placeholder="E-Mail" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'E-Mail';}"required=""></div>
                             <div><input name="pwd0"  type="password" placeholder="password" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'password';}"required=""></div>
                             <div><input name="pwd1"  type="password" placeholder="Confirm password" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Confirm password';}"required=""></div>
                             <div><input name="mob"   type="text" placeholder="Mobile No." onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Number';}"required=""></div>
		    	</div>
		    	<div class="col_1_of_2 span_1_of_2">
                            <div><input name="state" type="text" placeholder="State" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'State';}"required=""></div>
                            <div><input name="add" type="text" placeholder="Address" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Address';}"required=""></div>
                            <div><input name="land" type="text" placeholder="Landmark" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Landmark';}"required=""></div>
                            <div><input name="city" type="text" placeholder="City" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'City';}"required=""></div>
                            <div><input name="zip" type="text" placeholder="Zip" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Zip';}"required=""></div>
		          	
		          		
		        </div>
                       <button class="grey" type="submit" name="user_reg">Submit</button>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
   <?php 
   include 'includes/footer.php';
   ?>


</body>
</html>

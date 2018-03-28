<?php 
$title="Single";
include'header.php';
?>
  
<div class='mens'>   
    <div class='main'>
        <?php 
if(isset($_GET['product'])){
    $prd_id = $_GET['product'];
$prd_view = mysql_query("SELECT * FROM t_product WHERE p_id = '$prd_id'");

while ($row = mysql_fetch_array($prd_view)) 
{
        echo"<div class='wrap'>";
     	    echo"<div class='cont span_2_of_3'>";
		echo"<div class='grid images_3_of_2'>";
		    echo"<ul id='etalage'>";
			echo"<li>";
			    echo"<a href='optionallink.php'>";
				echo"<img class='etalage_thumb_image' src=\"Supplier/{$row['p_img']}\" class='img-responsive' />";
				echo"<img class='etalage_source_image' src=\"Supplier/{$row['p_img']}\" class='img-responsive' title='' />";
			    echo"</a>";
			echo"</li>";
		    echo"</ul>";
		    echo"<div class='clearfix'></div>";
	        echo"</div>";
                
		echo"<div class='desc1 span_3_of_2'>";
		    echo"<h3 class='m_3'>{$row['p_name']}</h3>";
		    echo"<p class='m_5'>Rs. {$row['p_price']} </p>";
		         	 
                    echo"<div class='btn_form' action ='cart.php' method ='post'>";
			
	    echo"</div>";
            
	        echo"<span class='m_link'><a href=\"login.php\">login to save in wishlist</a> </span>";
            
	    echo"<p class='m_text2'>{$row['p_desc']} </p>";
        echo"</div>";
}
}
?>          
			   <div class="clear"></div>	
	    <div class="clients">
	    <h3 class="m_3">You may want this too!!!</h3>
		 <ul id="flexiselDemo3">
			<li><img src="images/s5.jpg" /><a href="#">Category</a><p>Rs 600</p></li>
			<li><img src="images/s6.jpg" /><a href="#">Category</a><p>Rs 850</p></li>
			<li><img src="images/s7.jpg" /><a href="#">Category</a><p>Rs 900</p></li>
			<li><img src="images/s8.jpg" /><a href="#">Category</a><p>Rs 550</p></li>
			<li><img src="images/s9.jpg" /><a href="#">Category</a><p>Rs 750</p></li>
		 </ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
     </div>
     </div>
			
     </div>
			</div>
			 <div class="clear"></div>
		   </div>
		

	<?php 
   include 'includes/footer.php';
   ?>
</body>
</html>

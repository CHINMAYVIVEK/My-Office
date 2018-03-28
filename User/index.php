<?php 
$title="Home";
include'header.php';
?>
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="../images/banner.jpg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">Premimum Products</h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <p class="description">Lowest Price</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="../images/banner1.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Fresh and Best</h4>
                        <p class="description">Vegitables</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Featured Products</h2>
			<div class="top-box">
                            <?php 
                            $supplier = mysql_query("SELECT * FROM t_supplier WHERE a_id = NULL");
                            $product = mysql_query("SELECT * FROM t_product ORDER BY p_id DESC");
while ($row = mysql_fetch_array($product)) {
        echo " <div class='col_1_of_3 span_1_of_3'> "; 
	    echo "<a href=\"single.php?product={$row['p_id']}\"/>";
		echo"<div class='inner_content clearfix'>";
		    echo"<div class='product_image'> <img src='../Supplier/{$row['p_img']}' alt=''/> </div> ";
                    echo"<div class='sale-box'><span class='on_sale title_shop'>New</span></div>";	
                        echo"<div class='price'>";
			    echo"<div class='cart-left'>";
				echo"<p class='title'>{$row['p_name']}</p>";
				echo"<div class='price1'>";
				    echo"<span class='actual'>Rs. {$row['p_price']}</span>";
			        echo"</div>";
			    echo"</div>";
			    echo"<div class='cart-right'> </div>";
			    echo"<div class='clear'></div>";
			echo"</div>";				
                echo"</div>";
            echo"</a>";
	echo"</div>";
                              }
                            ?>   
 <!-- ---------------------------------------------------------------------------------------------------- -->                           
                            
			  
				<div class="clear"></div>
			</div>	
						 						 			    
		  </div>
                    
			
	   <div class="clear"></div>
	</div>
	</div>
	</div>
   <?php 
   include 'footer.php';
   ?>
</body>
</html>

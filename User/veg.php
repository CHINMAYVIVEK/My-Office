<?php 
$title="Search result";
include'header.php';
?>
<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head">Search result</h2>
                    <div class="top-box">
                        
                        
                        <?php 
                        if(isset($_GET['search']))
    {
                            $p_search = $_GET['name'];
                            
                                    $count = 0;
$sql = "SELECT * FROM t_product WHERE p_name like '%{$p_search}%' OR p_desc like '%{$p_search}%'"; 
$res1 = mysql_query($sql);
                          
                  while ($row = mysql_fetch_array($res1))
    {  
                            if($count>=3)
            { 
                echo "        
                        <div class='top-box'>
                            <div class='col_1_of_3 span_1_of_3'> 
                            <a href=\"single.php?product={$row['p_id']}\">
				<div class='inner_content clearfix'>
				     <div class='product_image'>
					<img src='Supplier/{$row['p_img']}'/>
				     </div>
                                     <div class='sale-box'><span class='on_sale title_shop'>New</span></div>	
                                        <div class='price'>
					    <div class='cart-left'>
							<p class='title'>{$row['p_name']}</p>
							<div class='price1'>
							  <span class='actual'>Rs. {$row['p_price']}</span>
							</div>
					    </div>
                            </a>    
						<a href ='#'><div class='cart-right'> </div></a>
						<div class='clear'></div>
					</div>				
                                </div>
                            
	                    </div>
                        </div>
                    ";     
                        
                           $count=$count-1; 
                           
            }
                          
                else
                    {
                         echo "    
                            <div class='col_1_of_3 span_1_of_3'> 
                            <a href=\"single.php\">
				<div class='inner_content clearfix'>
				     <div class='product_image'>
					<img src=\"images/pic.jpg\"/>
				     </div>
                                     <div class='sale-box'><span class='on_sale title_shop'>New</span></div>	
                                        <div class='price'>
					    <div class='cart-left'>
							<p class='title'>Lorem Ipsum simply</p>
							<div class='price1'>
							  <span class='actual'>$12.00</span>
							</div>
					    </div>
						<div class='cart-right'> </div>
						<div class='clear'></div>
					</div>				
                                </div>
                            </a>
	                    </div>
                        ";
                           $count=$count+1; 
                    }
                }
                            
            }
                       
            
            else{
                echo '<script language="javascript">';
                echo 'alert("Unable to search..."); location.href="index.php"';
                echo '</script>';
            }
            
            
            ?>
                        
                        
		     </div>	
					 							 			    
		  </div>
			
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="js/jquery.easydropdown.js"></script>
	<?php 
   include 'includes/footer.php';
   ?>
</body>
</html>

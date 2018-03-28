<?php  
$title="Cart";
include'header.php';

?>

<?php 

if(isset($_POST['buy'])){
    $nos = $_POST['qty'];
    $p_id = $_POST['pid'];
    
    $query = mysql_query("SELECT p_name, p_price, p_qty FROM t_product WHERE p_id = '$p_id'");
    while ($row = mysql_fetch_array($query)) {
      $p_name =  $row['p_name'];
      $p_price =  $row['p_price'];
      $p_qty =  $row['p_qty'];
        
        if($p_qty >= $nos)
        {        $avl = $p_qty-$nos;
           // echo"$nos product has been orderd, Now $avl available products";
            
                 $cart_data = mysql_query("INSERT INTO t_cart "
                                       . "(u_id, p_id, c_p_qty, p_name, p_price)"
                                . "VALUES ('$id','$p_id', '$nos', '$p_name', '$p_price')"); 
                 
            $product_update = mysql_query("UPDATE t_product SET p_qty = '$avl' WHERE p_id = '$p_id' ");
        }
        else{
            echo"You required $nos product and $p_qty product are available";
        }
    }
    
    
}

?>

<div class="container">
	<div class="row">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>Delete</th>
              
            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            $num = 1;
              while ($row1 = mysql_fetch_array($cart)) {
              $ttl_amt  =  $row1['p_price']*$row1['c_p_qty'];
                  
                echo"<tr>
                    <td> $num  </td> 
                    <td> {$row1['p_name']} </td>
                    <td> Rs.{$row1['p_price']}</td>
                    <td>  <input type='text' value='{$row1['c_p_qty']}'></td> 
                    <td> $ttl_amt</td>
                    <td><a href=\"cart.php?del_id={$row1['p_id']}\">Delete Product</a></td>
                  </tr> ";
                    $num = $num+1;
              }  
                  ?>
            
          </tbody>
        </table>   
      </div>
      <div class="col-md-12 text-center">
      <ul class="pagination pagination-lg pager" id="myPager"></ul>
      </div>
	</div>
    
    <span class="input-group-btn">
      <?php   echo"<a class='btn btn-default' href=\"invoice.php?inv_id=$id\">CheckOut!</a>" ; ?>
      </span
</div>

<script>

$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
  	pager.children().eq(1).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};

$(document).ready(function(){
    
  $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
    
});
</script>

<?php 
if(isset($_POST['del_id'])){
    
    $del_id = $_POST['del_id'];
    $del_product = mysql_query("SELECT c_p_qty FROM t_cart WHERE p_id= '$del_id'");
    while ($row2 = mysql_fetch_array($del_product)) {
        $del_prdt = $row2['c_p_qty'];
        $get_product = mysql_query("SELECT p_qty FROM t_product WHERE p_id= '$del_id'");
        
        while ($row3 = mysql_fetch_array($get_product)) {
         $rem_prdt =   $row3['p_qty'];
         $now = $del_prdt+$rem_prdt;
         $update = mysql_query("UPDATE t_product SET p_qty = '$now' WHERE p_id = '$del_id' ");
        }
    }
    
}
 else {
    
}

?>

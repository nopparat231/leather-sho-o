
<style type="text/css">
	
.button {
    background-color:   #DC143C;
    border: none;
    color: white;
    padding: 3px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.btn1:hover {

    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.btn2 {
    background-color:#FFE4E1;
    border: none;
    color: white;
    padding: 3px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.line{
    margin:5px 5;
}

.product_name{
    margin:5px 2; cursor:pointer;
}

.tag {background:url(img/yz.png) no-repeat 0 0; position: absolute; display:block; top: -2px;right: 10px; height:48px; width:48px;}


</style>


<?php 
$qty = $row_prd['p_qty'];
if($qty <= 0){ ?>

 <p dissable class="button btn2" >
        <font color="#CC7E6D" > <span class="glyphicon glyphicon-shopping-cart" ></span>สินค้าหมด</font></p>

   
   <?php }else{
        ?>
<!-- <button class="bb" type="button" >add</button> -->

         <a href="index.php?p_id=<?php echo $row_prd['p_id'];?>&act=add" class="button btn1 bb"  onclick="return confirm('คุณต้องการลบสินค้านี้หรือไม่?');" >
        <font color="#FFFFE0" > <span class="glyphicon glyphicon-shopping-cart" ></span>สั่งซื้อ</font></a>
<div class="dissable"></div>
    
<?php } ?>
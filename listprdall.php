<?php require_once('Connections/condb.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_condb);
$query_prd = "SELECT * FROM tbl_product ORDER BY t_id desc";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>
<?php do { ?>

  <div class="col-sm-4" align="center" >
  <span class="thumbnail">
<?php if ($row_prd['promo'] != 0) {
  echo "<p class='tag'></p>";
} ?>
<div class="items">
  <div class="img">
  <img src="pimg/<?php echo $row_prd['p_img1'];?>" width="80%"  />
  </div>
  <p align="center">
    <b><?php echo $row_prd['p_name']; ?> </b>
<br /><hr class="line">
<?php if ($row_prd['promo'] != 0) {
  echo " <font color='#8B0000'><strike>".number_format($row_prd['promo'],2)."</strike></font>";
} ?>

    <b ><font color="#8B0000">  <?php echo number_format($row_prd['p_price'],2); ?>  บาท </font> </b>
    <br />


     <?php include('outstock.php');?>

    <a href="product-detail.php?p_id=<?php echo $row_prd['p_id'];?>&act=product-detail" class="button btn2" style="background-color:  #DC143C"><font color="#FFFFFF" ><span class="glyphicon glyphicon-search"></span>รายละเอียด</font></a>


      <br><br>
      </p>
      </span>
    </div>
</div>

  <?php } while ($row_prd = mysql_fetch_assoc($prd)); ?>
<?php
mysql_free_result($prd);
?>
<!-- <script src="js/flyto.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


<script type="text/javascript">
  
  $('.items').flyto({
    item      : '.img',
    target    : '.cart',
    button    : '.bb',
    shake     : true

  });
</script> -->
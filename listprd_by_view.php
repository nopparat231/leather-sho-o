<?php //require_once('Connections/condb.php'); ?>
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
$query_prd = "SELECT * FROM tbl_product ORDER BY p_view desc limit 0,7";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());
$row_prd = mysql_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>
<?php do { ?>
<div class="row-sm-3"  >

 <li>
    <a href="product-detail.php?p_id=<?php echo $row_prd['p_id'];?>&act=product-detail"><font color="#000000" align="left"><b><?php echo $row_prd['p_name']; ?></b></font><br><img src="pimg/<?php echo $row_prd['p_img1'];?>" width="20%" /></a>
     <b ><font color="#8B0000"><?php if ($row_prd['promo'] != 0) {
  echo " <font color='#8B0000'><strike>".number_format($row_prd['promo'],2)."</strike></font>";
} ?>  <?php echo number_format($row_prd['p_price'],2); ?>  บาท </font> </b>
    <hr>
</li>


</div>
<?php } while ($row_prd = mysql_fetch_assoc($prd)); ?>
<?php
mysql_free_result($prd);
?>

<meta charset="UTF-8" />
<?php
include('Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$order_id = $_GET['order_id'];
$order_status = $_GET['order_status'];
$q = $_GET['q'];
$p = $_GET['p'];

mysql_select_db($database_condb);

$sqloid ="SELECT * FROM tbl_order_detail WHERE order_id='$order_id'";
$resultoid = mysql_query($sqloid, $condb) or die("Error in query : $sql" .mysql_error());
$count = mysql_num_rows($resultoid);
//$row_oid = mysql_fetch_assoc($resultoid);

while ($row_oid = mysql_fetch_assoc($resultoid)) {
	
$sqlpp ="SELECT * FROM tbl_product WHERE p_id=".$row_oid['p_id'];

$resultpp = mysql_query($sqlpp, $condb) or die("Error in query : $sql" .mysql_error());
$row_pp = mysql_fetch_assoc($resultpp);
$sq = $row_pp['p_qty']+$row_oid['p_c_qty'];

$sqlp ="UPDATE tbl_product SET p_qty='$sq' WHERE p_id=".$row_oid['p_id'];

$resultp = mysql_query($sqlp, $condb) or die("Error in query : $sql" .mysql_error());

}


$sql ="UPDATE tbl_order SET order_status='$order_status' WHERE order_id='$order_id'";


$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());


mysql_close();

if($result){
	echo "<script>";
	echo "window.location ='my_order.php?page=mycart'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='my_order.php?page=mycart'; ";
	echo "</script>";
}



?>
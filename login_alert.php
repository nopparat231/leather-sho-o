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
$colname_mm = $_GET['us'];
$ps = $_GET['ps'];
mysql_select_db($database_condb);
$query_mm = sprintf("SELECT * FROM tbl_member where mem_username ='$colname_mm'");
$mm = mysql_query($query_mm, $condb) or die(mysql_error());
$row_mm = mysql_fetch_assoc($mm);
$totalRows_mm = mysql_num_rows($mm);
?>
<?php

if ($row_mm['mem_username'] <> $colname_mm) {

  echo "<script>";
  echo "alert('ชื่อผู้ใช้ผิด !');";
  echo "window.location ='index.php'; ";
  echo "</script>";
}elseif ($row_mm['mem_password'] <> $ps) {

  echo "<script>";
  echo "alert('รหัสผ่านผิด !');";
  echo "window.location ='index.php'; ";
  echo "</script>";
}elseif (($row_mm['mem_username'] <> $colname_mm) && ($row_mm['mem_password'] <> $ps)) {
	echo "<script>";
  echo "alert('ไม่มีผู้ใช้งานนี้ กรุณาสมัครสมาชิก !');";
  echo "window.location ='index.php'; ";
  echo "</script>";
}

  

?>

<?php
mysql_free_result($mm);
?>




<?php
echo "<script>";
			echo "alert('ชื่อผู้ใช้ หรือ รหัสผ่าน ผิด กรุณาเข้าสู่ระบบอีกครั้ง !');";
			echo "window.location ='index.php'; ";
echo "</script>";
?>

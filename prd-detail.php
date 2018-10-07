<?php // require_once('Connections/condb.php'); ?>
<?php include('h.php');
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

$colname_prdt = "-1";
if (isset($_GET['p_id'])) {
  $colname_prdt = $_GET['p_id'];
}
mysql_select_db($database_condb);
$query_prdt = sprintf("SELECT * FROM tbl_product WHERE p_id = %s", GetSQLValueString($colname_prdt, "int"));
$prdt = mysql_query($query_prdt, $condb) or die(mysql_error());
$row_prdt = mysql_fetch_assoc($prdt);
$totalRows_prdt = mysql_num_rows($prdt);


//update product view
$p_id = $row_prdt['p_id'];
$p_view = $row_prdt['p_view'];
$count = $p_view + 1;

$sql= "UPDATE tbl_product SET  p_view=$count WHERE p_id = $p_id";
mysql_query($sql , $condb);
//
?>
<!DOCTYPE html >
<html >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Untitled Document</title>
</head>

<body>
	<div class="col-sm-5">
    <img src="pimg/<?php echo $row_prdt['p_img1'];?>" class="img img-responsive">
    <br>
    <?php if ($row_prdt['p_img2'] != "") {?>
      <img src="pimg/<?php echo $row_prdt['p_img2'];?>" class="img img-responsive">
      <br>
    <?php } if ($row_prdt['p_img3'] != "") { ?>
      <img src="pimg/<?php echo $row_prdt['p_img3'];?>" class="img img-responsive">
      <br>
     <?php} if ($row_prdt['p_img4'] != "") {?>
      <img src="pimg/<?php echo $row_prdt['p_img4'];?>" class="img img-responsive">
      <br>
    <?php } if ($row_prdt['p_img5'] != "") {?>
      <img src="pimg/<?php echo $row_prdt['p_img5'];?>" class="img img-responsive">
      <br>   

       <?php } ?>


  </div>

  <div class="col-md-7">
   <h4>  ชื่อสินค้า :  <?php echo $row_prdt['p_name']; ?> </h4>
   รายละเอียด : <?php echo $row_prdt['p_detial']; ?>
   <font color="#B22222">
    <h3> ราคา 
      <?php if ($row_prdt['promo'] != 0) {
        echo " <font color='#8B0000'><strike>".number_format($row_prdt['promo'])."</strike></font>";
      } ?>
      <?php echo number_format ($row_prdt['p_price']); ?>  บาท  </h3> </font> <br />
      จำนวนการเข้าชม <?php echo $row_prdt['p_view']; ?>  ครั้ง  <br />
      จำนวนสินค้าคงเหลือ <?php echo $row_prdt['p_qty']; ?>  ชิ้น

      <br /><br />

      <?php
      $qty = $row_prdt['p_qty'];
      if($qty <= 0){

        echo "<font color='red'>";
        echo "<button class='button btn-lg glyphicon glyphicon-shopping-cart' disabled='disable' style='background-color: #000000;'>สินค้าหมด!</button>";
        echo "</font>";
      }else{

        ?>


        <form action="index.php"  method="get">

          <br />
          <input type="text" name="p_id"  hidden value="<?php echo $p_id;?>" />
          <button name="act" class="button btn-lg  glyphicon glyphicon-shopping-cart" value="add" style="background-color: #DC143C" >สั่งซื้อ</button>



        </form>
        <br />
        <br />
        <br />
        <br />
        <br />

      <?php } ?>

    </div>
  </body>
  </html>
  <?php
  mysql_free_result($prdt);
  ?>
  <style type="text/css">

  .button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
  }

  .button:hover {background-color: #3e8e41}

  .button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }

</style>

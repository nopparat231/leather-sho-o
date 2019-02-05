<?php require_once('Connections/condb.php'); ?>
<?php


mysql_select_db($database_condb);
$query_rb = "SELECT * FROM tbl_bank";
$rb = mysql_query($query_rb, $condb) or die(mysql_error());
$row_rb = mysql_fetch_assoc($rb);
$totalRows_rb = mysql_num_rows($rb);
?>
<?php // include('h.php');?>

 <div class="container">
 	<div class="row">

    	<div class="col-md-8" style="background-color: #FFFFFF">
        		<h3 align="center" > เลขบัญชีสำหรับชำระเงิน </h3><br>
                <!-- <font color="red"> *กรุณา Login เพื่อชำระเงิน </font> </h3> -->
                  <div class="table-responsive">

                <table border="0" align="center" class="table table-hover">

                  <tr class="success">
                    <td></td>
                    <td>ธนาคาร</td>
                    <td>ประเภท</td>
                    <td>เลขบัญชี</td>
                    <td>ชื่อบัญชี</td>
                    <td>สาขา</td>
                  </tr>
                  <?php do { ?>
                    <tr>
                      <td><img src="bimg/<?php echo $row_rb['b_logo']; ?>" width="50"></td>
                      <td><?php echo $row_rb['b_name']; ?></td>
                      <td><?php echo $row_rb['b_type']; ?></td>
                      <td><?php echo $row_rb['b_number']; ?></td>
                      <td><?php echo $row_rb['b_owner']; ?></td>
                      <td><?php echo $row_rb['bn_name']; ?></td>
                    </tr>
                    <?php } while ($row_rb = mysql_fetch_assoc($rb)); ?>
                </table>
                <p>
                <button type="button" class="btn btn-default pull-left" data-target="#how_to_order" id="btn" data-toggle="modal">วิธีการชำระเงิน</button>

                <button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="btn" >ปิด</button>
                <br>
                </p>
                <br>
        </div>
          <!-- <button type="button" class="btn pull-right" data-dismiss="modal" id="btn" >ปิด</button> -->

      </div>
      </div>
    </div>
<?php
mysql_free_result($rb);
?>

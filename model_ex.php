
<div class="container">
  <h2></h2>  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ชำระสินค้า</h4>
        </div>
        <div class="modal-body">
           <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40" colspan="6" align="left" bgcolor="#FFFFFF">
          <h4>รายละเอียดการโอนเงิน
            <br />   <br />
            <font color="red">
              *กรุุณาเลือกบัญชีที่โอนเงิน
            </font>
          </h4></td>
        </tr>
        <?php do { ?>
          <tr>
            <td width="10%" align="center">&nbsp;</td>
            <td width="5%" align="center">
              <input <?php if (!(strcmp($row_rb['b_name'],"b_bank"))) {echo "checked=\"checked\"";} ?> type="radio" name="bank"  value="<?php echo $row_rb['b_name'].'_'.$row_rb['b_number'];?>" required="required" />

            </td>
            <td width="5%" align="center"><img src="bimg/<?php echo $row_rb['b_logo']; ?>" width="50" /></td>
            <td width="15%"><?php echo $row_rb['b_name']; ?></td>
            <td width="15%"><?php echo $row_rb['b_number']; ?></td>
            <td width="15%"><strong>สาขา</strong><?php echo $row_rb['bn_name']; ?></td>
          </tr>
        <?php } while ($row_rb = mysql_fetch_assoc($rb)); ?>
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">วันที่ชำระเงิน</td>
          <td colspan="5" align="left"><label for="pay_date"></label>
           <?php include 'thaidate.php'; ?>
           <input type="text" name="pay_date" id="from" autocomplete="off" required="required">
          </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">จำนวนเงิน</td>
            <td colspan="5" align="left"><label for="pay_amount"></label>
              <input type="text" name="pay_amount" id="pay_amount"  value="<?php echo $total;?>" required="required"/></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center">หลักฐานการโอน</td>
              <td colspan="5" align="left"><input name="pay_slip" id="pay_slip" type="file"  required="required" accept="image/jpeg"/>
              (ไฟล์ .jpg, gif, png, pdf&nbsp;ไม่เกิน 2mb)</td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td align="center">&nbsp;</td>
              <td><input name="order_id" type="hidden" id="order_id" value="<?php echo $colname_cartdone;?>" /></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

          </table>


          <p align="center"><br />
            <button type="submit" name="add" class="btn btn-success"> บันทึก </button>

          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>

    </div>
  </div>

</div>

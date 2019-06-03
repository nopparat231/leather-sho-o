<?php require_once('Connections/condb.php'); ?>
<?php
error_reporting( error_reporting() & ~E_NOTICE );
session_start();
// print_r($_SESSION);
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
//session_start();
$colname_buyer = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_buyer = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb);
$query_buyer = sprintf("SELECT * FROM tbl_member WHERE mem_username = %s", GetSQLValueString($colname_buyer, "text"));
$buyer = mysql_query($query_buyer, $condb) or die(mysql_error());
$row_buyer = mysql_fetch_assoc($buyer);
$totalRows_buyer = mysql_num_rows($buyer);
  //echo 'ss'.$row_buyer;
if($_SESSION['MM_Username']!=''){
  ?>

  <p id="hp"><input type="button" name="Submit2" value="< เลือกสินค้าเพิ่ม" class="btn btn-info pull-left" onclick="window.location='index.php';" /></p>
  <table width="700" border="0" align="center" class="table"  >

    <tr>
      <td width="1558" colspan="8" align="center">
        <strong>สั่งซื้อสินค้า</strong></td>
      </tr>
      <tr class="success">
        <td align="center">ลำดับ</td>
        <td align="center">สินค้า</td>
        <td align="center">ไซส์</td>
        <td align="center">ราคา</td>
        <td align="center">จำนวน</td>
        <td><center>หน่วยนับ</center></td>
        <td align="center">ค่าจัดส่ง</td>
        <td align="center">รวม/รายการ</td>
      </tr>
      <form  name="formlogin" action="saveorder.php" method="POST" id="login" class="form-horizontal">
        <?php
        require_once('Connections/condb.php');
        $total = 0;
        if ($totalRows_buyer > 0) {

          foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
          {
            $sql = "select * from tbl_product where p_id=$p_id";
            $query = mysql_query($sql,$condb);
            $row  = mysql_fetch_array($query);
            $sum  = $row['p_price']*$p_qty;
            $total  += $sum;
            $ems = $row['p_ems'] * $p_qty;
            $total += $ems;
            $sumems +=$ems;

            echo "<tr class='success' align='center'> ";
            echo "<td align='center'>";
            echo  $i += 1;
            echo "</td>";
            echo "<td>" . $row["p_name"] . "</td>";
            echo "<td align='center'>" . $row["p_size"] . "</td>";
            echo "<td align='center'>" .number_format($row['p_price'],2) ."</td>";
            echo "<td align='center'>$p_qty</td>";
            echo "<td align='center'>" .$row["p_unit"]. "</td>";
            echo "<td width='10%' align='center'>".number_format($ems,2). "</td>";
            echo "<td align='center'>".number_format($sum,2)."</td>";
            echo "</tr>";

            ?>

            <input type="hidden"  name="p_name[]" value="<?php echo $row['p_name']; ?>" class="form-control" required placeholder="ชื่อ-สกุล" />



            <?php
          }

          $tax = $total*0.09;
          $total += $tax;
          echo "<tr class='success'>";
          echo "<td  align='left' colspan='7'><b>จัดส่ง</b></td>";
          echo "<td align='center'>"."<b>".number_format($sumems,2)."</b>"."</td>";
          echo "</tr>";
          echo "<tr class='success'>";
          echo "<td  align='left' colspan='7'><b>ภาษี 9%</b></td>";
          echo "<td align='center'>"."<b>".number_format($tax,2)."</b>"."</td>";
          echo "</tr>";
          echo "<tr class='success'>";
          echo "<td colspan='7' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
          echo "<td align='center' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
          echo "</tr>";
          ?>
        </table>


        <h3 align="center" style="color:green">
          <span class="glyphicon glyphicon-shopping-cart"> </span>
        ที่อยู่ในการจัดส่งสินค้า  </h3>
        <center>       
         <input type="radio" name="select" value="1" id="a1" checked>ใช้ที่อยู่ 1 &nbsp;&nbsp;&nbsp;  
         <input type="radio" name="select" value="2" id="a2">ใช้ที่อยู่ 2
       </center>
       <br>
       <div class="col-sm-6">

        <?php
        $n = "";
        $ng = "";
        $ns = "";
        if ($row_mlogin['numna'] == 'นาย'){
          $n = "selected='selected'";
        }elseif ($row_mlogin['numna'] == 'นาง') {
          $ng = "selected='selected'";
        }elseif ($row_mlogin['numna'] == 'นางสาว') {
         $ns = "selected='selected'";
       } ?>

       <div class="form-group">
            
          <select class="form-control" id="numna" name="numna">
            <option value="นาย" <?php echo $n; ?>>นาย</option>
            <option value="นาง" <?php echo $ng; ?>>นาง</option>
            <option value="นางสาว" <?php echo $ns; ?>>นางสาว</option>
          </select>
        
      </div>

      <div class="form-group">

        <input type="text" id="fname" name="fname"  pattern="^[a-zA-Zก-๙ ]+$" value="<?php echo $row_buyer['mem_fname']; ?>" class="form-control" required placeholder="ชื่อ"maxlength="50" onkeyup="validate1();" />

      </div>

      <div class="form-group">

        <input type="text" id="lname" name="lname" pattern="^[a-zA-Zก-๙ ]+$" 
        value="<?php echo $row_buyer['mem_lname']; ?>" class="form-control" required placeholder="สกุล" maxlength="50"onkeyup="validate3();"/>

      </div>
      <div class="form-group">

        <textarea name="address" id="address"  class="form-control"  rows="3"  required placeholder="ที่อยู่ในการส่งสินค้า"><?php echo $row_buyer['mem_address']; ?></textarea>


      </div>
      <div class="form-group">

        <input  type="text" min="10" max="10" name="phone" id="phone"  value="<?php echo $row_buyer['mem_tel']; ?>" required  class="form-control" placeholder="เบอร์โทรศัพท์" pattern="[0-9]{10}" size="10" title="เบอร์โทร 0-9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
          type="tel" maxlength = "10" onkeyup="num1();"/>

      </div>
      <div class="form-group">

        <input type="email"  name="email" id="email"  class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $row_buyer['mem_email']; ?>" required placeholder="อีเมล์" title="กรุณากรอก อีเมล ให้ถูกต้อง"/>

      </div>

    </div>



    <div class="col-sm-6" >

        <?php
        $n = "";
        $ng = "";
        $ns = "";
        if ($row_mlogin['numna2'] == 'นาย'){
          $n = "selected='selected'";
        }elseif ($row_mlogin['numna2'] == 'นาง') {
          $ng = "selected='selected'";
        }elseif ($row_mlogin['numna2'] == 'นางสาว') {
         $ns = "selected='selected'";
       } ?>

       <div class="form-group">
            
          <select class="form-control" id="numna2" name="numna2" disabled>
            <option value="" >เลือกคำนำหน้า</option>
            <option value="นาย" <?php echo $n; ?>>นาย</option>
            <option value="นาง" <?php echo $ng; ?>>นาง</option>
            <option value="นางสาว" <?php echo $ns; ?>>นางสาว</option>
          </select>
        
      </div>
      <div class="form-group">

        <input type="text" id="fname2" name="fname2" pattern="^[a-zA-Zก-๙ ]+$" disabled value="<?php echo $row_buyer['mem_fname2']; ?>" class="form-control" required placeholder="ชื่อ"maxlength="50" onkeyup="validate();"/>

      </div>

      <div class="form-group">

        <input type="text" id="lname2" name="lname2" pattern="^[a-zA-Zก-๙ ]+$" disabled 
        value="<?php echo $row_buyer['mem_lname2']; ?>" class="form-control" required placeholder="สกุล"maxlength="50" onkeyup="validate2();"/>

      </div>
      <div class="form-group">

        <textarea name="address2" id="address2" disabled class="form-control"  rows="3"  required placeholder="ที่อยู่ในการส่งสินค้า"maxlength="150"><?php echo $row_buyer['mem_address2']; ?></textarea>


      </div>
      <div class="form-group">

        <input type="text" min="10" max="10" id="phone2"  name="phone2" disabled value="<?php echo $row_buyer['mem_tel2']; ?>" required class="form-control" placeholder="เบอร์โทรศัพท์" 
          pattern="[0-9]{10}" size="10" title="เบอร์โทร 0-9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
          type="tel" maxlength = "10" onkeyup="num();"/>

      </div>
      <div class="form-group">

        <input type="email" id="email2"  name="email2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" disabled class="form-control" value="<?php echo $row_buyer['mem_email2']; ?>" required placeholder="อีเมล์" title="กรุณากรอก อีเมล ให้ถูกต้อง"/>

      </div>


    </div>

    <br>
    <div class="form-group">
      <div class="col-sm-6" align="center">
        <input name="mem_id" type="hidden" id="mem_id2" value="<?php echo $row_buyer['mem_id']; ?>">
        <br>
        <button type="submit" class="btn btn-primary" id="btn">
        ยืนยันสั่งซื้อ </button>
      </div>
    </div>
  </form>
</div>
</div>
</div>

<?php
}
} else{
  include('logout3.php');
 }//seseion

 mysql_free_result($buyer);
 ?>
 <br>
 <br>


 <script>
  $(document).ready(function(){
    $("#a1").click(function(){
      document.getElementById("numna").disabled = false;
      document.getElementById("fname").disabled = false;
      document.getElementById("lname").disabled = false;
      document.getElementById("address").disabled = false;
      document.getElementById("phone").disabled = false;
      document.getElementById("email").disabled = false;


      document.getElementById("numna2").disabled = true;
      document.getElementById("fname2").disabled = true;
      document.getElementById("lname2").disabled = true;
      document.getElementById("address2").disabled = true;
      document.getElementById("phone2").disabled = true;
      document.getElementById("email2").disabled = true;

    });
    $("#a2").click(function(){
     document.getElementById("numna").disabled = true;
     document.getElementById("fname").disabled = true;
     document.getElementById("lname").disabled = true;
     document.getElementById("address").disabled = true;
     document.getElementById("phone").disabled = true;
     document.getElementById("email").disabled = true;

     document.getElementById("numna2").disabled = false;
     document.getElementById("fname2").disabled = false;
     document.getElementById("lname2").disabled = false;
     document.getElementById("address2").disabled = false;
     document.getElementById("phone2").disabled = false;
     document.getElementById("email2").disabled = false;
   });
  });


  function enableBtn() {
   // alert("etet");
   document.getElementById("name2").disabled = true;

 }
  function validate() {
    var element = document.getElementById('fname2');
    element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
  }
  function validate1() {
    var element = document.getElementById('fname');
    element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
  }
  function validate2() {
    var element = document.getElementById('lname2');
    element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
  }
  function validate3() {
    var element = document.getElementById('lname');
    element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
  }

  function num() {
    var element = document.getElementById('phone2');
    element.value = element.value.replace(/[^0-9]+/, '');
  }
  function num1() {
    var element = document.getElementById('phone');
    element.value = element.value.replace(/[^0-9]+/, '');
  }
</script>


<?php
error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_SESSION)) {
  session_start();

}
$p_id = $_GET['p_id'];
$act = $_GET['act'];


if($act == 'add' && !empty($p_id))
{
    if(!isset($_SESSION['shopping_cart']))
    {
        $_SESSION['shopping_cart'] = array();
    }else{

    }
    if(isset($_SESSION['shopping_cart'][$p_id]))
    {

        $_SESSION['shopping_cart'][$p_id]++;

    }else{
        $_SESSION['shopping_cart'][$p_id]=1;
    }

}


if($act == 'remove' && !empty($p_id))
{
    unset($_SESSION['shopping_cart'][$p_id]);
}

if($act == 'update')
{
    $amount_array = $_POST['amount'];
    foreach($amount_array as $p_id => $amount)
    {
        $_SESSION['shopping_cart'][$p_id] = $amount;

    }
}
$q = $p_qty;
?>

<form id="frmcart" name="frmcart" method="post" action="?act=update&oct=after" >
    <table width="100%" border="0" aligh="center" class="table table-hover">
        <tr>
            <td height="40" colspan="8" align="center" bgcolor="#FFE4E1"><strong><b>ตระกร้าสินค้า</b></strong></td>
        </tr>
        <tr >
            <td><center>สินค้า</center></td>
            <td><center>ไซส์</center></td>
            <td><center>ราคา</center></td>
            <td><center>จำนวน</center></td>
            <td><center>หน่วยนับ</center></td>
            <td><center>ค่าจัดส่ง</center></td>
            <td align="left">รวม</td>
            <td><center></center></td>
        </tr>

        <?php
        $total=0;


        if(!empty($_SESSION['shopping_cart']))
        {
            require_once('Connections/condb.php');
            foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
            {
                mysql_select_db($database_condb);
                $sql = "select * from tbl_product where p_id=$p_id";
                $query = mysql_query($sql, $condb );
                $row = mysql_fetch_array($query);
                $sum = $row['p_price'] * $p_qty;
                $total += $sum;

                $ems = $row['p_ems'] * $p_qty;
                $total += $ems;

                $sumems +=$ems;


                echo "<tr>";
                echo "<td width='30%' align='center'>". $row["p_name"] ."<br><img src='pimg/" . $row["p_img1"] . "' width='50%''></img></td>";
                echo "<td align='center' width='5%'>" .$row["p_size"]. "</td>";
                echo "<td width='15%' align='center'>" .number_format($row["p_price"],2) . "</td>";


                echo "<td width='15%' align='center'>";

                echo "<input type='number' value='$p_qty' min='1' max='" .$row['p_qty']. "' size='1' name='amount[$p_id]' /></td>";
                echo "<td align='center' width='5%'>" .$row["p_unit"]. "</td>";

                echo "<td width='10%' align='center'>".number_format($ems,2). "</td>";
                //echo "<input type='number' name='amount[$p_id]' value='$p_qty' size='2'/></td>";
                echo "<td width='10%' align='left'>".number_format($sum,2). "</td>";
                echo "<td width='2%'align='left'><a href='confirm_order.php?p_id=$p_id&act=remove&oct=after' ><span class='glyphicon glyphicon-remove' ></span></a></td>";

                echo "</tr>";


            }


            $tax = $total*0.09;
            $total += $tax;


            echo "<tr>";
            echo "<td  align='left' colspan='7'><b>จัดส่ง</b></td>";
            echo "<td align='center'>"."<b>".number_format($sumems,2)."</b>"."</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td  align='left' colspan='7'><b>ภาษี 9%</b></td>";
            echo "<td align='center'>"."<b>".number_format($tax,2)."</b>"."</td>";
            //echo "<td ></>";
            echo "</tr>";

            echo "<tr class='success'>";
            echo "<td colspan='7' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
            echo "<td align='center' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
           //echo "<td class='success'></td>";
            echo "</tr>";

        }


        if ($p_qty > $row["p_qty"]) {
// echo $p_qty;
// echo $row["p_qty"];
           ?>
           <script>alert('รายการสินค้า "<?php echo $row["p_name"] ?>" มีสินค้าเพียง "<?php echo $row["p_qty"] ?>" ชิ้น!'); </script>
           <tr >

            <td colspan="7" >
                <input type="button" name="Submit2" value="< เลือกสินค้าเพิ่ม" class="btn btn-info pull-left" onclick="window.location='index.php';" />

                <input type="button" name="Submit2" value="สั่งซื้อ" disabled class="btn btn-success pull-right" onclick="window.location='confirm_order.php?p_id=$p_id&oct=order';" />

                <input type="submit" name="button" id="button" value="คำนวน"  class="btn btn-warning pull-right"  />

            <?php   }else{?>

              <tr >

                <td colspan="7" >
                    <input type="button" name="Submit2" value="< เลือกสินค้าเพิ่ม" class="btn btn-info pull-left" onclick="window.location='index.php';" />

                    <input type="button" name="Submit2" value="สั่งซื้อ" class="btn btn-success pull-right" onclick="window.location='confirm_order.php?p_id=$p_id&oct=order';" />

                    <input type="submit" name="button" id="button" value="คำนวน"  class="btn btn-warning pull-right"  />


                <?php } ?>

            </td>
            <td></td>
        </tr>
    </table>
</form>

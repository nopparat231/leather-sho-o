<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
@session_start();
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
?>

<form id="frmcart" name="frmcart" method="post" action="?act=update">
    <table width="100%" border="0" aligh="center" class="table table-hover">
        <tr>
            <td height="40" colspan="5" align="center" bgcolor="#FFE4E1"><strong><b>ตระกล้าสินค้า</b></strong></td>
        </tr>
        <tr  bgcolor='#FFFFFF'>
            <td><center></center></td>

            <td><center>ราคา</center></td>
            <td><center>จำนวน</center></td>
              <td><center>หน่วยนับ</center></td>
            <td><center>รวม</center></td>
        </tr>
        <?php
        $total=0;
        if(!empty($_SESSION['shopping_cart']))
        {
            require_once('Connections/condb.php'); 
            foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
            {
                $sql = "select * from tbl_product where p_id=$p_id";
                $query = mysql_query($sql, $condb );
                $row = mysql_fetch_array($query);
                $sum = $row['p_price'] * $p_qty;
                $total += $sum;
                echo "<tr bgcolor='#FFFFFF' >";
                echo "<td width='10%' align='center'><img src='pimg/" . $row["p_img1"] . "' width='50%''></img></td>";
                echo "<td width='3%' align='center'>" .number_format($row["p_price"],2) . "</td>";
                echo "<td width='3%' align='center'>".$p_qty."</td>";  
                 echo "<td width='3%' align='center'>".$row["p_unit"]."</td>";  
                echo "<td width='5%' align='right'>".number_format($sum,2). " บาท&nbsp"
?>
                <a href='index.php?<?php echo "p_id=$p_id"; ?>&act=remove' onclick="return confirm('คุณต้องการลบสินค้านี้หรือไม่?');"><span class='glyphicon glyphicon-trash' ></span></a>
          <?php echo " </td>"; 
                echo "</tr>";
            }
            echo "<tr class='success'>";
            echo "<td colspan='4' bgcolor='#9370DB' align='right'><b>ราคารวม</b></td>";
            echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)." บาท</b>"." </td>";
            echo "</tr>";
        }
        ?>

        <tr >

            <td colspan="5" align="right"  bgcolor='#FFFFFF' >
                
                <input type="button" name="Submit2" value="สั่งซื้อ" class="btn btn-success" onclick="window.location='confirm_order.php?p_id=$p_id&oct=after';" />
            </td>
        </tr>
    </table>
</form>
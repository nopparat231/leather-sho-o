<?php require_once('../Connections/condb.php'); ?>
<?php
mysql_select_db($database_condb);
$query_prd = "
SELECT * FROM tbl_product as p, tbl_type as t
WHERE p.t_id = t.t_id
ORDER BY p.p_id desc";
$prd = mysql_query($query_prd, $condb) or die(mysql_error());

$totalRows_prd = mysql_num_rows($prd);
?>
<?php include('access.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <?php include('h.php');?>


  </head>    <?php include('navbar.php');?>
  <body> <?php //include('menu.php');?>

  <div class="container">



    <div class="row">


      <div class="col-md-3">

      </div>
      <div class="col-md-9" align="center">
        <h3 align="center"> <a href="add_product.php" class="btn btn-primary"> เพิ่มสินค้า </a> รายการตรวจรับสินค้า </h3>
        <br>

        <form action="" method="post">
          <h4 style="width: 360px; text-align: center;">

            <select class="js-example-basic-single form-control" name="state" required="required" id="btn1">
              <option value="0">กรุณาเลือกสินค้า</option>

              <?php while ( $row_prd = mysql_fetch_assoc($prd)) { ?>

                <option value="<?php echo $row_prd['p_id']; ?>"><?php echo $row_prd['p_name']; ?></option>

              <?php } ?>
            </select>
            <br>
            <br>

            <div id="div1"></div>


            <br>
            <br>

          </h4>
          <button type="button" class="btn btn-success btn-lg" id="button">ยืนยัน</button>

        </form>

      </div>
    </body>
    </html>

    <?php //include('f.php');?>
    <script type="text/javascript">
      // In your Javascript (external .js resource or <script> tag)
      $(document).ready(function() {
        $('.js-example-basic-single').select2();
      });

      $("[type=file]").on("change", function(){
  // Name of file and placeholder
  var file = this.files[0].name;
  var dflt = $(this).attr("placeholder");
  if($(this).val()!=""){
    $(this).next().text(file);
  } else {
    $(this).next().text(dflt);
  }
});


      $(document).ready(function(){

        $("#btn1").on('change', function(){

          $.post("list_sell_aj.php", { 
            data1: $("#btn1").val()}, 
            function(result){
              $("#div1").html(result);
            }
            );

        });
      });

         $(document).ready(function(){

        $("#button").click(function(){

          $.post("list_sell_aj.php", { 
            data1: $("#btn1").val()}, 
            function(result){
              $("#div1").html(result);
            }
            );

        });
      });
    </script>



    <style type="text/css">
     label, input {
      color: #333;
      font: 14px/20px Arial;
    }
    h2 {
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0 0 1em;
    }
    label {
      display: inline-block;
      width: 5em;
      padding: 0 1em;
      text-align: right;
    }

/* Hide the file input using
opacity */
[type=file] {
  position: absolute;
  filter: alpha(opacity=0);
  opacity: 0;
}
input,
[type=file] + label {
  border: 1px solid #CCC;
  border-radius: 50px;
  text-align: left;
  padding: 10px;
  width: 150px;
  margin: 0;
  left: 0;
  position: relative;
}
[type=file] + label {
  text-align: center;
  left: 7.35em;
  top: 0.5em;
  /* Decorative */
  background: #333;
  color: #fff;
  border: none;
  cursor: pointer;
}
[type=file] + label:hover {
  background: #3399ff;
}
</style>
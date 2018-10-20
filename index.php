<?php
ob_start();
include('h.php');?>
<?php include('datatable.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/Li.png" />
  <style type="text/css">
  .hr{
    color: #f00;
    background-color: #f00;
    height: 5px;
  }

  input[type=number]{
    width:40px;
    text-align:center;
    color:red;
    font-weight:600;
  }
  div.sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 0px;

    padding: 5px;
    background-color: #cae8ca;
    border: 2px solid #4CAF50;
  }




</style>


</head>
<body>
  <div >

    <?php  include('test2navbar.php');
    include('check_order_date.php');?>
  </div>
<!--   <div class="sticky">I am sticky!</div> -->
  <div class="container">
    <div class="row">

      <div class="col-md-3" >
        <?php include('category2.php'); ?>
        <br>
        <h3>สินค้าขายดี</h3>
        <hr>
        <?php include('listprd_by_view.php');?>
<h4 align="center">ยอดเข้าชมเว็บไซร์<br>
<a href="http://www.rapidcounter.com/signup.php" target="_top"><img border="0" alt="Counter" src="http://counter.rapidcounter.com/counter/1540005700/a"; ALIGN="middle" HSPACE="4" VSPACE="2"></a><script src=http://counter.rapidcounter.com/script/1540005700></script></h4>

      </div>




      <?php

      $type_name = $_GET['type_name'];
      $t_id = $_GET['t_id'];
      $q = $_GET['q'];
      if($t_id !=''){ ?>
        <div class="col-md-3" ></div>
        <div class="col-md-9" ><br>
         <font color="#660000"><h3> รายการสินค้า <?php echo $type_name;?></h3></font>
          <hr size="10" style="background-color: #0099CC; height: 5px;">

          <?php  include('listprd_by_type.php'); ?>
        </div>

      <?php }elseif($q!=''){ ?>
        <div class="col-md-3" ></div>
        <div class="col-md-9">
         <br>
         <font color="#660000"><h3>รายการสินค้า <?php echo $q;?></h3></font>
          <hr size="10" style="background-color: #000000; height: 5px;">

          <?php include('listprd_by_q.php'); ?>
        </div>




        <?php
      }
      ?>

      <div class="col-md-3" ></div>
      <div class="col-md-9">

       <font color="#660000"><h3> รายการสินค้า ทั้งหมด</h3></font>
        <hr size="10" style="background-color: #FF9933; height: 5px;">

        <?php include('listprdall.php'); ?>
      </div>




    </div>
  </div>

  <!--end show  product-->
  <?php  include('f.php');?>
</body>

<div>


</div>
</html>

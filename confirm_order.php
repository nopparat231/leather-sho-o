<?php include('h.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
        input[type=number]{
          width:40px;
          text-align:center;
          color:red;
          font-weight:600;
        }
    </style>

    
  </head>
  <body>
   
  <div>
      
      <?php include('test2navbar.php') ?>
    </div>
    <!--start show  product-->
    <div class="container">
      <div class="row">
        <!-- categories-->
        <div class="col-md-3">
    
    <?php include('category2.php') ?>
  </div>

          <div class="col-md-8">
          <?php
        $oct = $_GET['oct'];
        if ($oct == 'after') {
          include('after_order.php');
        }elseif ($oct == 'order') {
          include('order.php');
        }?>
          </div>
        
      
    </div>

        <?php // include('f.php');?>
    </div>
      <!--end show  product-->
    </body>
  </html>
  <?php include('f.php');?>
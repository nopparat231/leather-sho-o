
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include('datatable.php');?>
</head>
<body>

  <div class="row" style="padding-top:50px">

    <div class="col-md-10" style="background-color:#f4f4f4">


      <h3 align="center">  สมัครสมาชิก </h3>

      <form  name="register" action="register_db.php" method="POST" id="register" class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-2">  </div>
         <div class="col-sm-10" align="left">
           <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
         </div>
       </div>
       <div class="form-group">
        <div class="col-sm-2" align="right"> ชื่อผู้ใช้ : </div>
        <div class="col-sm-10" align="left">
          <input  name="mem_username" type="text" required class="form-control" id="mem_username" placeholder="ชื่อผู้ใช้" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> รหัสผ่าน : </div>
        <div class="col-sm-10" align="left">
          <input  name="mem_password" type="password" required class="form-control" id="mem_password" placeholder="รหัสผ่าน" pattern="^[a-zA-Z0-9]+$" minlength="2" />
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> ชื่อ-สกุล : </div>
        <div class="col-sm-10" align="left">
          <input  name="mem_name" type="text" required class="form-control" id="mem_name" placeholder="ชื่อ-สกุล" />
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> ที่อยู่ : </div>
        <div class="col-sm-10" align="left">
          <textarea name="mem_address" type="textarea" required class="form-control" id="mem_address" placeholder="ที่อยู่" ></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> เบอร์โทร : </div>
        <div class="col-sm-10" align="left">
          <input  name="mem_tel" type="text" required class="form-control" id="mem_tel" placeholder="0912345678" pattern="[0-9]{10}" minlength="2" maxlength="10" title="เบอร์โทร 0-9"/>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2" align="right"> อีเมล : </div>
        <div class="col-sm-10" align="left">
          <input  name="mem_email" type="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required class="form-control" id="mem_email" placeholder="อีเมล" title="กรุณากรอก อีเมล ให้ถูกต้อง" minlength="2"/>
        </div>
      </div>
 <div class="modal-footer">
      <div class="form-group">
        <!-- สมัครสมาชิก -->


          <button type="button" class="btn btn-default pull-left" id="btn" data-target="#how_to_regis" data-toggle="modal">วิธีสมัครสมาชิก</button>


          <button type="button" class="btn btn-primary" id="btn"> สมัครสมาชิก  </button>

        <button type="button" class="btn btn-default" id="btn" data-dismiss="modal">ยกเลิก</button>

        </div>
      </div>
    </form>
  </div>
</div>


</body>
</html>

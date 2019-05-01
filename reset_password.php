<?php require_once('Connections/condb.php'); ?>

<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['resetpassword'])) {
  $loginUsername=$_POST['mem_username'];
  $email=$_POST['mem_email'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_condb);

  $LoginRS__query=sprintf("SELECT mem_username,mem_password ,mem_email FROM tbl_member WHERE mem_username= '$loginUsername' AND mem_email='$email'  AND active='yes'");

  $LoginRS = mysql_query($LoginRS__query, $condb) or die(mysql_error());

  $objResult = mysql_fetch_array($LoginRS);
  if (!$objResult) {

    echo "<script>";
    echo "alert('Username หรือ Email ไม่ถูกต้อง !');";
    echo "window.location ='index.php';";
    echo "</script>";
  }else {

   echo "<script>";
   echo "alert('Password ถูกส่งไปแล้ว กรุณาตรวจสอบ E-mail !');";
   echo "window.location ='index.php'; ";
   echo "</script>";

   $strTo = $email;
   $strSubject = "Your Account information username and password.";
      $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //
      $strMessage .= "Username และ Password สำหรับเข้าสู่ระบบ<br>";
      $strMessage .= "=================================<br>";

      $strMessage .= "Username : ".$objResult["mem_username"]."<br>";
      $strMessage .= "Password : ".$objResult["mem_password"]."<br>";
      $strMessage .= "=================================<br>";

      $flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);


}
    }
   mysql_close();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('h.php');?>
  </head>
  <body>

   <div class="row" style="padding-top:100px">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#f4f4f4">
      <h3 align="center">
        <span class="glyphicon glyphicon-lock"> </span>
      กรุณากรอก Username และ E-mail ! </h3>
      <form  name="formlogin" action="reset_password.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input  name="mem_username" type="text" required class="form-control" id="mem_username" placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input name="mem_email" type="email" required class="form-control" id="mem_email" placeholder="email" />
            <input type="hidden" name="resetpassword">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" id="btn" >
              <span class="glyphicon glyphicon-log-in"> </span>
            ลืมรหัสผ่าน </button>
             <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          </div>
        </div>
      </form>
    </div>
  </div>



</body>
</html>

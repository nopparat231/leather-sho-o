
<?php require_once('Connections/condb.php'); ?>
<?php
//error_reporting(E_ALL & ~E_NOTICE);

?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();

}

$loginFormActionUser = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['mem_username'])) {
  $loginUsername=$_POST['mem_username'];
  $password=$_POST['mem_password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "esset.php?us=$loginUsername";
  $MM_redirectLoginFailed = "login_alert.php?us=$loginUsername&ps=$password";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_condb);

  $LoginRS__query=sprintf("SELECT mem_username, mem_password FROM tbl_member WHERE mem_username='$loginUsername' AND mem_password='$password' AND active='yes'");

  $LoginRS = mysql_query($LoginRS__query, $condb) or die(mysql_error());
  $row_mm = mysql_fetch_assoc($LoginRS);
  $loginFoundUser = mysql_num_rows($LoginRS);

  if ($loginFoundUser) {
   $loginStrGroup = "";

   if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
   $_SESSION['MM_Username'] = $loginUsername;
   $_SESSION['MM_UserGroup'] = $loginStrGroup;



   if (isset($_SESSION['PrevUrl']) && false) {
    $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];

  }

   header("Location: " . $MM_redirectLoginSuccess); //. $MM_redirectLoginSuccess
 } else {
  header("Location: " . $MM_redirectLoginFailed ); //. $MM_redirectLoginFailed
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


  <div class="row" style="padding-top:100px">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#f4f4f4">
      <h4 align="center">
        <span class="glyphicon glyphicon-lock"> </span>
      กรุณาเข้าสู่ระบบก่อนทำรายการ</h4>
      <form  name="formlogin" action="<?php echo $loginFormActionUser; ?>" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input  name="mem_username" type="text" required class="form-control" id="mem_username" placeholder="ชื่อผู้ใช้" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input name="mem_password" type="password" required class="form-control" id="mem_password" placeholder="รหัสผ่าน" />
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-success" id="btn">
                <span class="glyphicon glyphicon-log-in"> </span>
              เข้าสู่ระบบ </button>&nbsp;&nbsp;

              <a href="index.php" type="button"  data-target='#reset_view' data-toggle='modal' data-dismiss="modal">
                <span class="glyphicon glyphicon-new-window" >ลืมรหัสผ่าน</a>&nbsp;&nbsp;</span>

                <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


  </body>
  </html>


<meta charset="UTF-8" />
<?php
session_start();
include('Connections/condb.php');


$mem_username = $_POST['mem_username'];
$mem_password = $_POST['mem_password'];
$mem_fname = $_POST['mem_fname'];
$mem_lname = $_POST['mem_lname'];
$numna = $_POST['numna'];
//$mem_name = $_POST['mem_name'];
$mem_email = $_POST['mem_email'];
$mem_tel = $_POST['mem_tel'];
$mem_address = $_POST['mem_address'];
$user = "user";
$session_id = session_id();
$no = "no";
mysql_select_db($database_condb);
$check = "SELECT * FROM tbl_member WHERE mem_username = '$mem_username'";
$result = mysql_query($check,$condb);
$num = mysql_num_rows($result);

$checkemail = "SELECT * FROM tbl_member WHERE mem_email = '$mem_email' ";
$resultemail = mysql_query($checkemail,$condb);
$numemail = mysql_num_rows($resultemail);

if ($num > 0 ){
	echo"<script>";
	echo"alert('ชื่อผู้ใช้ นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
	echo"window.location = 'index.php';";
	echo"</script>";
}elseif ($numemail > 0 ){
	echo"<script>";
	echo"alert('Email นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
	echo"window.location = 'index.php';";
	echo"</script>";
}else{

$sql ="INSERT INTO tbl_member (mem_username , mem_password , mem_fname , mem_lname , numna , mem_email ,  mem_tel , mem_address , status ,sid , active ) VALUES ('$mem_username' , '$mem_password' ,'$mem_fname' ,'$mem_lname' ,'$numna' ,'$mem_email','$mem_tel','$mem_address' ,'$user' ,'$session_id','$no' )";

$result1 = mysql_query($sql,$condb) or die ("Error in query : $sql" .mysql_error());


		$mem_id = mysql_insert_id($condb);

		$strTo = $mem_email;

		$strHeader = "Content-type: text/html; charset=utf-8\n"; // or UTF-8 //
		$strHeader .= "From: webmaster@junpha.com\n";
		$strSubject = "Activate Member Account\n";
		$strMessage = "";
		$strMessage .= "ยินดีต้อนรับ : ".$mem_fname."<br>";
		$strMessage .= "=================================<br>";
		$strMessage .= "คลิกลิงค์ เพื่อยืนยันการสมัครสมาชิก<br>";
		$strMessage .= "http://localhost/leather-shop/activate.php?sid=".$session_id."&mem_id=".$mem_id."<br>";
		$strMessage .= "=================================<br>";
		$strMessage .= "<br>";

		$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);

}

mysql_close();
if($result1){
	echo"<script>";
	echo"alert('สมัครสมาชิกเรียบร้อยแล้ว กรุณายืนยันที่ อีเมล !');";
	echo"window.location = 'index.php';";
	echo"</script>";
}else{
	echo"<script>";
	echo"alert('สมัครสมาชิกไม่สำเร็จ!');";
	echo"window.location = 'index.php';";
	echo"</script>";
	}

?>

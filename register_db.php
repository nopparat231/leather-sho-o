
<meta charset="UTF-8" />
<?php
session_start();
include('Connections/condb.php');


$mem_username = $_POST['mem_username'];
$mem_password = $_POST['mem_password'];
$mem_name = $_POST['mem_name'];
$mem_email = $_POST['mem_email'];
$mem_tel = $_POST['mem_tel'];
$mem_address = $_POST['mem_address'];
$user = "user";
$session_id = session_id();
$no = "no";
mysql_select_db($database_condb);
$check = "SELECT * FROM tbl_member WHERE mem_username = '$mem_username' ";
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

$sql ="INSERT INTO tbl_member (mem_username , mem_password , mem_name , mem_email ,  mem_tel , mem_address , status ,sid , active ) VALUES ('$mem_username' , '$mem_password' ,'$mem_name','$mem_email','$mem_tel','$mem_address' ,'$user' ,'$session_id','$no' )";

$result1 = mysql_query($sql,$condb) or die ("Error in query : $sql" .mysql_error());

require_once('./sentmailer/class.phpmailer.php');
		$mem_id = mysql_insert_id($condb);
$massage = "http://junpha456.tk/activate.php?sid=".$session_id."&mem_id=".$mem_id."<br>";
$mail = new PHPMailer();
			$mail->CharSet = "UTF-8";

			$mail->IsHTML(true);
			$mail->IsSMTP();
                    $mail->SMTPAuth = true; // enable SMTP authentication
                    $mail->SMTPSecure = ""; // sets the prefix to the servier
                    $mail->Host = "free.mboxhosting.com"; // sets GMAIL as the SMTP server
                    $mail->Port = 25; // set the SMTP port for the GMAIL server
                    $mail->Username = "service@junpha456.tk"; // GMAIL username
                    $mail->Password = 'YJ7xpXShzd9bsig'; // GMAIL password
                    $mail->From = "service@junpha456.tk"; // "name@yourdomain.com";
                    //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
                    $mail->FromName = "junpha456.tk";  // set from Name
                    $mail->Subject = "ยืนยันการสมัครสมาชิก junpha456.tk"; 
                    $mail->Body = $massage;
                    
                    $mail->AddAddress($email); // to Address

                        if($mail->send()){


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

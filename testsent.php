
<?php if (!isset($_SESSION)) {
  session_start();
} ?>
<?php
$session_id = session_id();
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sharelea@sharelearningmedia.com";
    $to = "junpha01@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine <br>" . $session_id;
    $headers = "From:" . $from;
    $send = mail($to,$subject,$message, $headers);
    if (!$send) {
    	echo "Error. Check : https://myaccount.google.com/lesssecureapps";
    }else{
    	echo "The email message was sent.<br>" . $session_id;
    }
//https://myaccount.google.com/lesssecureapps
?>

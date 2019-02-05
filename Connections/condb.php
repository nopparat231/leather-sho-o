<?php
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
$hostname_condb = "fdb25.runhosting.com";
$database_condb = "2951561_jp";
$username_condb = "2951561_jp";
$password_condb = "Password23.";
$condb = mysql_connect($hostname_condb, $username_condb, $password_condb) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");

?>
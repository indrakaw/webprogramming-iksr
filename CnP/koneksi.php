<?php require_once 'setting.php';
$cn = mysql_connect(CNP_DBHOST, CNP_DBUSER, CNP_DBPASS);
$rs = mysql_select_db(CNP_DBNAME, $cn) or die("Database tidak dapat dibuka! " .mysql_error());
 ?>

<?php include 'db_fns.php';
$conn = db_connect();

$sql = "DELETE FROM cyberlogin WHERE username='$uid'";
$result=mysql_query($sql, $conn);

session_start();

// Store to test if they *were* logged in
unset($HTTP_SESSION_VARS);
$result_dest = session_destroy();
header("Location: e-management.php");

 ?>

<?php session_start();
// $tahun_akademik = $HTTP_SESSION_VARS['ta'];
include 'db_fns.php';
include 'gadogado.php';
include 'db_func.php';
if (authentic_user($uid, $sesi)==false) {
  echo "<meta http-equiv='refresh' content='1;url=psn.php?=Maaf akses Anda ditolak, harap login dulu &uid=$sesi'>";
  exit;
};
$conn = db_connect();
 ?>

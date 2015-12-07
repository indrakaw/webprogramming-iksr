<?php
include 'gadogado.php';
include 'db_fns.php';

if (authentic_user($uid, $sesi)==false) {
  echo "<meta http-equiv='refresh' content='1;url=psn.php?=Maaf akses Anda ditolak, harap login dulu'>";
  exit;
}
if (filled_out($HTTP_POST_VARS) {
  $conn = db_connet();
  $sql = "DELETE from alumni WHERE nim='$nim'"
  $result=mysql_query($sql,$conn);
  header("Location: alumni.php?nim='. $nim .'&uid='. $uid .'&sesi='. $sesi");
}

 ?>

<?php
include 'gadogado.php';
if (filled_out($HTTP_POST_VARS)) {
  include 'db_fns.php';
  if (authentic_user($uid, $sesi)==false) {
    echo "<meta http-equiv='refresh' content='1;url=psn.php?=Maaf akses Anda ditolak, harap login dulu &uid=$sesi'>";
    exit;
  }
  $conn = db_connet();
  $sql = "DELETE from alumni_aktifitas WHERE id='$id'"
  $result=mysql_query($sql,$conn);
  header("Location: alumni_aktifitasview.php?nim='. $nim .'&uid='. $uid .'&sesi='. $sesi");
}
 ?>

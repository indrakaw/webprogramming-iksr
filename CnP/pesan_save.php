<?php
include 'gadogado.php';
session_start();
if (filled_out($HTTP_POST_VARS)) {
  include 'db_fns.php';
  $conn=db_connect();
  if (authentic_user($uid, $sesi)==false) {
    echo "<meta http-equiv='refresh' content='1;url=psn.php?=Maaf akses Anda ditolak, harap login dulu &uid=$sesi'>";
    exit;
  }
  $tgl = getdate();
  $tanggal = $tgl['year']."-".$tgl['mon']."-".$tgl['mday'];
  $sql = "INSERT into pesan (msg_from, msg_to, subject, description, reading)
  values ('$from', '$tanggal', '$to', '$subject', '$description', 0)"

  $result = mysql_query($sql, $conn);
  $url="?nim=".$nim."&uid=".$uid."&sesi=".$sesi;
  header("Location: index.php".$url);
} else {
  $url="?id=".$id."&nim=".$nim."&uid=".$uid."&sesi=".$sesi."&psn=(Pesan ada kesalahan, semua data wajib diisi!)";
  header("Location: pesan_new.php".$url);
}

 ?>

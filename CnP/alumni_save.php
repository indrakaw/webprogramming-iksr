<?php
include 'gadogado.php';
if (filled_out($HTTP_POST_VARS)) {
  include 'db_fns.php';
  $conn=db_connect();
  if (authentic_user($uid, $sesi)==false) {
    echo "<meta http-equiv='refresh' content='1;url=psn.php?=Maaf akses Anda ditolak, harap login dulu &uid=$sesi'>";
    exit;
  }
  $sql="INSERT into alumni_aktifitas (nim, aktifitas_tgl, aktifitas_ptid, aktifitas_posisi, aktifitas_status, diterima, diterima, aktifitas_ket, aktitas_mulai, aktifitas_selesai, aktifitas_sk)
    values ('$nim','$tanggal','$kp','$posisi','$status','$diterima','$ket','$mulai','$selesai','$sk')";
    $result=mysql_query($sql,$conn);

    // update ke tabel alumni. cari data terakhir disimpan
    if ($diterima='Lulus') {
      $sql="SELECT id from alumni_aktifitas WHERE nim='$nim' order by id desc";
      $result=mysql_query($sql,$conn);
      $rs=mysql_fetch_array($result);
      $id=$rs[0];
      $sql="UPDATE alumni set id_mk='$id' where nim='$nim'";
      $result=mysql_query($sql,$conn);
    }
    $url="?nim=".$nim."&uid=".$uid."&sesi=".$sesi;
    header("Location: alumniaktifitasview.php".$url);
} else {
  $url="?id=".$id."&nim=".$nim."&uid=".$uid."&sesi=".$sesi."&psn=(Pesan ada kesalahan, semua data wajib diisi!)";
  header("Location: alumniaktifitasedit.php".$url);
}

 ?>

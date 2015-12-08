<?php
include 'gadogado.php';
if (filled_out($HTTP_POST_VARS)) {
  include 'db_fns.php';
  $conn=db_connect();
  if (authentic_user($uid, $sesi)==false) {
    echo "<meta http-equiv='refresh' content='1;url=psn.php?=Maaf akses Anda ditolak, harap login dulu &uid=$sesi'>";
    exit;
  }
  // Periksa nim pada tabel alumni

  $sql="SELECT count(nim) as jml from alumni where nim='$nim'";
  $result=mysql_query($sql,$conn);
  $row=mysql_fetch_array($result);
  // echo $sql ."-". $row[0];
  // exit;

  if ($row[0]>0) {
    // Nim sudah ada
    header("Location: alumni_new.php?psn=(Terjadi kesalahan, NIM sudah terdaftar.)");
    echo "$nim Sudah ada.";
    exit;
  }
  //  file upload
  $userfile_name = $HTTP_POST_FILES['userfile']['name'];
  $userfile_namecv = $HTTP_POST_FILES['userfilecv']['name'];

  // file foto
  $userfile_name = stripslashes($username_name);
  $userfile_name = str_replace("'","",$userfile_name);
  $upfile = './foto_alumni/'.$userfile_name;
  $copy = copy($HTTP_POST_FILES['userfile']['tmp_name'],$upfile);

  // file cv
  $userfile_namecv = stripslashes($username_namecv);
  $userfile_namecv = str_replace("'","",$userfile_namecv);
  $upfilecv = './foto_alumni/'.$userfile_namecv;
  $copy = copy($HTTP_POST_FILES['userfile']['tmp_name'],$upfilecv);

  // Input data query
  $kc = $HTTP_SESSION_VARS['kodecabang'];
  $sql="INSERT Into alumni values ('$nim', '$nama', '$lahir_di', '$tanggal', '$kelamin', '$kode', '$ipl', '$alamat', '$tlp','$ta','$kc','$userfile_name', 0, '$username_namecv')"
  // echo $sql; exit;
  $result = mysql_query($sql, $conn);

  $url="?nim=".$nim."&uid=".$uid."&sesi=".$sesi;
  header("Location: alumni.php".$url);
} else {
  $url="?id=".$id."&nim=".$nim."&uid=".$uid."&sesi=".$sesi."&psn=(Pesan ada kesalahan, semua data wajib diisi!)";
  header("Location: alumni_new.php".$url);
}

 ?>

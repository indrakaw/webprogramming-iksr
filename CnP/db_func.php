<?php require_once 'setting.php';
function cari_kodecabang($user) {
  $conn = db_connect();
  $sql = "SELECT kodecabang FROM cyberlogin WHERE usename='$user'";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  return $rs[0];
};

function cari_cabang($kodecabang) {
  $conn = db_connect();
  $sql="SELECT namacabang FROM cabang WHERE kodecabang='$kodecabang'";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  return $rs[0];
};

function ambil_inisial($namafield, $user) {
  $conn = db_connect();
  $sql="SELECT `$namafield` FROM alumni_inisial WHERE username='$user'";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  return $rs[0];
};

function ambil_setting($namafield) {
  $conn = db_connect();
  $sql="SELECT `$namafield` FROM alumni_setting";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  return $rs[0];
};

function cnp_setting($namafield, $uid) {
  $conn = db_connect();
  $sql="SELECT `$namafield` FROM alumni_inisial WHERE username='$uid'";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  return $rs[0];
};
 ?>

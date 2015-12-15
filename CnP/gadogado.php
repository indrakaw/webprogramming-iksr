<?php require_once 'setting.php';
# WTF dengan namanya 'gadogado.php'?! Saya heran dengan penulisnya. :^)
function filled_out($form_vars) {
  // test that each variable has a value
  foreach ($form_vars as $key => $value) {
    return (!isset($key) || ($value=="")) ? false : true;
  }
  return true;
};

function display_tanggal($tgl) {
  $deret_tanggal = substr($tgl,8,2).'-'.substr($tgl,5,2).'-'.substr($tgl,0,4);
  return $deret_tanggal;
};

function authentic_user($username, $sesi) {
  $conn = db_connect();
  $sql="SELECT count(*) as jml FROM cyberlogin WHERE username='$username and sesi='$sesi''";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  $retVal = ($rs['jml']=='0') ? false : true ;
  return $retVal;
}

function cari_jurusan($kode) {
  $conn = db_connect();
  $sql="SELECT jurusan FROM jurusancabang WHERE kode='$kode'";
  $result=@mysql_query($sql, $conn);
  $rs = mysql_fetch_array($result);
  return $rs[0];
}

// Variabel berikut akan terset otomatis ketika fungsi ini di-include.
$bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$askala = array('', 'Nasional', 'Internasional', 'BUMN', 'BUMD', 'Lokal');
$sex = array('', 'Laki-laki', 'Perempuan');

// echo halaman gagal, belum login, redirect, meta tag dsb dalam satu fungsi.
function cetak_meta($type) {
  switch ($type) {
    case 1:
      $url = ;
    break;
    $meta = "<meta http-equiv='refresh' content='1;$url'>";
  }
  return echo $meta;
}
 ?>

<?php include_once 'koneksi.php';
$myquery="SELECT count(*) AS jd FROM cyberuserlist WHERE username='$ouser' and password='$opwd' and grp='$aslog'";
$result=mysql_query($myquery) or die("Perintah SQL ditolak ". mysql_error());
$row=mysql_fetch_array($result);
if ($row['jd']==0)) {
  $metacontent = "<meta http-equiv=\"refresh\" content=\"1;url=?pesan=Maaf, Login anda gagal, silahkan ulangi kembali.\">"
} else {
  $myquery="SELECT count(*) AS jd FROM cyberuserlist WHERE username='$ouser' and password='$opwd' and grp='$aslog'";
  $result=mysql_query($myquery) or die("Perintah SQL ditolak ". mysql_error());
  $row=mysql_fetch_array($result);
  $sesi=randstring();
  // ---- Simpan ke cyberlogin ----
  $myquery="DELETE from cyberlogin where username='$ouser'";
  $result=mysql_query($myquery) or die("Perintah SQL ditolak ". mysql_error());
  $tgl=date(ymdhis);
  // Kode cabang
  $ck="SELECT * from cyberuserlist where username='$ouser'";
  $gen=mysql_query($ck);
  $jkkalah=mysql_fetch_array($gen);
  $koc=$jkkalah[3];

  switch ($row['grp']) {
    case 1: $metacontent = "<meta http-equiv=\"refresh\" content=\"1;url=login-manajemen.php?uid=$ouser&sesi=$sesi\">"
    break;
    case 2: $metacontent = "<meta http-equiv=\"refresh\" content=\"1;url=login-marketing.php?uid=$ouser&sesi=$sesi\">"
    break;
    case 3: $metacontent = "<meta http-equiv=\"refresh\" content=\"1;url=e-keuangan.php?uid=$ouser&sesi=$sesi\">"
    break;
    case 5: $metacontent = "<meta http-equiv=\"refresh\" content=\"1;url=index.php?uid=$ouser&sesi=$sesi\">"
    break;
  }
}
function randstring() {
  $pass=60;
  $allchar="ABCDEFGHIJKLMNOPQRSTUVWXYZancdefghijklmnopqrstuvwxyz1234567890";
  mt_srand((double) microtime()*1000000);
  $string='';
  for ($i=0; $i < $pass; $i++) {
    $string .= $allchar{mt_rand(0,strlen($allchar))};
  }
  return $string;
}
 ?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Memproses...</title>
   <?php echo $metacontent; ?>
 </head>
 <body>
   <p>Tunggu sebentar, proses verifikasi data...</p>
 </body>
</html>

<?php include_once 'koneksi.php';
$myquery="SELECT count(*) AS jd FROM cyberuserlist WHERE username='$ouser' and password='$opwd' and grp='$aslog'";
$result=mysql_query($myquery) or die("Perintah SQL ditolak ". mysql_error());
$row=mysql_fetch_array($result);
if ($row['jd']==0)) {
  # code...
} else {
  # code...
}

 ?>

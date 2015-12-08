<?php session_start();
$uid = ((isset($uid))) ? $uid : null ;
$sesi = ((isset($sesi))) ? $sesi : null ;
 ?>
<link rel="stylesheet" href="sayangsayang.css" type="text/css" charset="utf-8">
<base target="middle" />
<header>
  <div class="wrapper row">
    <h1 class="logo-small">E-management LP3I</h1>
    <ul class="menu-list">
      <li><a href="indexcnp.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>">Home</a></li>
      <li><a href="alumni.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>">Alumni</a></li>
      <li><a href="perusahaan.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>">Relasi</a></li>
      <li><a href="tools.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>">Tools</a></li>
      <li><a href="report_monlty.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>">Report</a></li>
      <li><a href="logout.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>">Logout</a></li>
    </ul>
  </div>
</header>

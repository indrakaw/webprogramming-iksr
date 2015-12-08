<?php
$uid = ((isset($uid))) ? $uid : null ;
$sesi = ((isset($sesi))) ? $sesi : null ;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LP3I E-management</title>
    <link rel="stylesheet" href="sayangsayang.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="custom.css" type="text/css" charset="utf-8">
  </head>
  <body>
    <iframe name="top" id="iheader" src="headerpb.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>" class="fullwidth">
      <p>This page uses iframes, but your browser doesn't support them.</p>
    </iframe>
    <iframe name="middle" id="imain" src="indexcnp.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>" class="fullwidth"></iframe>
    <iframe name="bottom" id="ifooter" src="footer.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>" class="fullwidth"></iframe>
  </body>
</html>

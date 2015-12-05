<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LP3I E-management</title>
  </head>
  <body>
    <iframe name="top" src="headerpb.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>" class="fullwidth">
      <p>This page uses iframes, but your browser doesn't support them.</p>
    </iframe>
    <iframe name="middle" src="indexcnp.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>" class="fullwidth"></iframe>
    <iframe name="bottom" src="footer.php?uid=<?php echo $uid. "&sesi=" .$sesi ; ?>" class="fullwidth"></iframe>
  </body>
</html>

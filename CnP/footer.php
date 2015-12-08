<?php session_start();
$foot_cabang = ((isset($HTTP_SESSION_VARS['cabang']))) ? $HTTP_SESSION_VARS['cabang'] : "-" ; ?>
<link rel="stylesheet" href="sayangsayang.css" type="text/css" charset="utf-8">
<footer>
  <div class="wrapper row text-center">
    <div class="col text-mute" style="width: 33%;">Cooperate and Placement</div>
    <div class="col" style="width: 33%;"><?php echo $foot_cabang; ?></div>
    <div class="col text-mute" style="width: 33%;">Copyright (C) 2010 LP3I College</div>
  </div>
</footer>

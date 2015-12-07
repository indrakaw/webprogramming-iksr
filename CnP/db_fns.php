<?php require_once 'setting.php';
function db_connect() {
  $result = @mysql_pconnect(CNP_DBHOST, CNP_DBUSER, CNP_DBPASS);
  if (!$result) return false;
  if (!@mysql_select_db(CNP_DBNAME)) return false;
  return $result;
};

function db_result_to_array($result) {
  $res_array = array(); // reset values
  for ($count=0; $row = @mysql_fetch_array($result); $count++) $res_array[$count]=$row;
  return $res_array;
};

 ?>

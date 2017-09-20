<?php

$host = "localhost";
$user = "user";
$passwd = "pass";
$database = "db";

// Don't chmage anythong below this



$con = mysql_connect($host,$user,$passwd);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($database, $con);

?>


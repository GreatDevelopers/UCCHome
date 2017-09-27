<?php

$host = "localhost";
$user = "user";
$passwd = "pass";
$database = "db";

// Don't chmage anythong below this



$con = mysqli_connect($host,$user,$passwd);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con, $database);
# mysqli_select_db($database);

?>

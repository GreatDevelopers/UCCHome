<?php
$rownumber = 0;
$Table2 = "organisers_position";
$sql2 = "select * from $Table2 where position < 0 AND position > -7 order by `position` ";
$res2 = mysql_query($sql2);

echo "<div class='bgRed'>Chief Patrons</div></br>";

include 'org2.php';
echo "</br>";

$Table2 = "organisers_position";
$sql2 = "select * from $Table2 where position < -7 AND position > -11 order by `position` ";
$res2 = mysql_query($sql2);

echo "<div class='bgRed'>Patrons</div></br>";

include 'org2.php';
echo "</br>";

$Table2 = "organisers_position";
$sql2 = "select * from $Table2 where position > 0 and position< 12 order by `position` ";
$res2 = mysql_query($sql2);

echo "<div class='bgRed'>Congress Organising Committee</div></br>";

include 'org2.php';
echo "</br>";

?>


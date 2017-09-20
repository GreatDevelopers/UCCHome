<?php
echo "<div class=\"RowEvenC\">";
$Table = "images";
//$HeaderHeigth="100%";
$ImageSize="\"99%\"";
$PathImage = "400/";
$result = mysql_query("SELECT * FROM $Table where id = '9'");

$rownumber=0;
echo "<table>";

while($row = mysql_fetch_array($result))
{
  $rownumber++;
 echo "<tr><td class='footerLogoH'><img src=\"" . $PathImage . $row['image'] . "\" width = " . $ImageSize . " alt = \"" . $row['caption'] . "\"> ";
 echo  $row['caption'] ;
 echo "</td></tr>";
//echo "</div>";

}

//echo "</div>";
echo "</table>";
echo "</div>";


$Table = "data";
$sql = "select * from $Table where id = $refNo ";
$res = mysql_query($sql);
$rownumber=0;

echo "<table>";
while ( $row = mysql_fetch_array($res))
{
  if($rownumber%2==0) $layout="RowEvenC";
  else
  {   
   $layout="RowOddC";
  }
   
  $rownumber++;
  $item[0] = "<tr><td>";
  $item[0] .= " <div class= $layout > <div class='bgRed'>" . $row['title'] ;
  $item[0] .=  $row['sub_title'] . "</div></br>" . $row['text'];
  $item[0] .=  "</div></td></tr>";
//   $item[0] .=   " </div> ";

 echo $item[0];

 }
echo "</table>";

$Table = "images";
//$HeaderHeigth="100%";
$ImageSize="\"99%\"";
$PathImage = "400/";
$result = mysql_query("SELECT * FROM $Table where id = '8'");

$rownumber=0;


echo "<table>";


while($row = mysql_fetch_array($result))
{
  $rownumber++;
 echo "<tr><td class='footerLogoH'><img src=\"" . $PathImage . $row['image'] . "\"  width =" .  $ImageSize . "alt = \"" . $row['caption'] . "\">" ;


echo  $row['caption'];
echo "</td></tr>";
//echo "</div>";

}

//echo "</div>";
echo "</table>";

//echo "</div>";

//echo "<div>";


?>

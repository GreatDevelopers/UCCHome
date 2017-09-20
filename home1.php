<?php
$Table = "data";




$result = mysql_query("SELECT * FROM $Table where id ='2'");

while($row = mysql_fetch_array($result))
{
 $layout="RowOddCH";

  $item[0] = "";
  $item[0] .= " <div id=$layout >";
if($row['title']!=null)
{
 $item[0] .= "<h1>".$row['title'].":"." ". $row['sub_title']."</h1>";
}
 $item[0] .=   $row['text'] ;
// $item[0] .= "</div>";

 echo $item[0];
}

$Table = "images";
$HeaderHeigth="100%";
$ImageSize="75px";
$PathImage = "../Pictures/";
$result = mysql_query("SELECT * FROM $Table");

$rownumber=0;
echo "<div id=\"footerLogoH\">";
while($row = mysql_fetch_array($result))
{
  $rownumber++;
 echo "<a href=\"" . $SERVER['PHP_SELF'] . "?refNo=" . $row['id'] . "&fileRef=" . "images" . "\">" . " <img src=\"" . $PathImage . $row['image'] . "\" width = $ImageSize > "."</a>";
//echo " <img src=\"" . $PathImage . $row['image'] . "\" width = $ImageSize > ";
//echo  $row['caption'] ;
 
//echo "</div>";

}
echo "</div>";
echo "</div>";


$Table = "data";


$s1 = "SELECT * FROM $Table where id ='1'";
$result3 = mysql_query("$s1");

while($row3 = mysql_fetch_array($result3))
{
 $layout="RowEvenCH";

  $item[0] = "";
  $item[0] .= " <div id=$layout >";
if($row3['title']!=null)
{
 $item[0] .= "<h1>".$row3['title'].":"." ". $row3['sub_title']."</h1>";
}
 $item[0] .=   $row3['text'] ;
 $item[0] .= "</div>";

 echo $item[0];
}



?>

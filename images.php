<?php
$slash="/";
$ImageSize = "100px";
$table="Slot";
$sql = "select * from $table where key_id= '$refNo' ";
$rownumber=0;
$res = mysql_query($sql);
while ( $row = mysql_fetch_array($res))
{

$datetime = strtotime($row['slot_date']);
$mysqldate = date("l j F Y", $datetime);
$item[0] = "<hr/>";
$item[0] .= " <div class=\"RowEventext1\" ><div class='bgGrey'>";
$item[0] .=  "<center>". $row['op'].":" . " ".$mysqldate."</div></center>";
$item[0] .= " </div >";
echo $item[0];
}
//----------------------------------------------------------------------------------------------------------------------------------------

$table="Conferences";
$sql = "select * from $table where key_id= '$refNo' ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_array($res))
{
$item[0] = "";
$item[0] .= " <div class=\"RowOddtext1\" ><div class='bgRed'>";
$item[0] .=   $row['Name']. ":"."  ". $row['Abbreviation'];
$item[0] .= " </div></div >";
echo $item[0];
}
//---------------------------------------------------------------------------------------------------------------------------------------

$sql = "select * from opening_paper where id = '$refNo' ";
$PathImage="Pictures/";
$res = mysql_query($sql);
$dedicated="Dedicated to";
echo " <div class=\"RowEventext1\" ><div class='bgGrey'>";
echo "<center>". $dedicated."</center></div>";
echo " </div >";
while ( $row = mysql_fetch_array($res))
{

$item[0] = "";

$item[0].= "<table><tr><td>"; 
$item[0] .=   "<img src='" . $PathImage . $row['image'] ."' width = '$ImageSize'>";
   $item[0].= "</td><td>";
echo $item[0];

//-------------------------------------------------------------------------------------------------------------------------------------- 
 
 $table="User";
$sql = "select * from $table where key_id= '$refNo' ";
//echo "\n $sql \n";
//$PathImage="../Pictures/";
$res = mysql_query($sql);

while ( $row = mysql_fetch_array($res))
{

 $item[0] = "<div id=\"Honour\">";
   $item[0] .=   $row['first_name']." ".$row['last_name'];
   $item[0] .= "<br/> ".$row['affiliation'];
   $item[0] .= "<br/> ".$row['address'];
 $item[0] .= "</div></td></tr></table> ";

echo $item[0];
 
 }
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
$refNo = $_GET['refNo'];
$tablename="keynotes";
$rownumber=0;
$sql = "select * from $tablename where user_id = '$refNo' ";
$res = mysql_query($sql);
while ( $row = mysql_fetch_array($res))
{
	   $item[0] = "";
   $item[0] .= " <div id=\"RowOddtext\" >";
   $item[0] .=  $row['user_bio'] ;
   $item[0] .= " </div> ";

echo $item[0];
}
 $item[0] .= " </div> ";

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
 
$table="User";
$sql = "select * from $table where key_id= '$refNo' ";
//echo "\n $sql \n";
//$PathImage="../Pictures/";
$res = mysql_query($sql);

while ( $row = mysql_fetch_array($res))
{

 $item[0] = "";
$item[0] .= " <div class=\"RowEventext\" >";
//   $item[0] .=   $row['first_name']." ".$row['last_name']." ";
  //$item[0] .= " </div> ";

echo $item[0];
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
 
$sql = "select * from opening_paper where id = '$refNo' ";
$represents="Opening Paper: ";
$PathImage="/var/www/Pictures/";
$res = mysql_query($sql);

while ( $row = mysql_fetch_array($res))
{
 $item[0] = "";
 $item[0] .=  "<div class='bgRed'>". $represents." "."\"".$row['title']."\"";
 $item[0] .= " </div> </div>";
echo $item[0];
}
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
?>

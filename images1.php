<?php
$table="Slot";
$sql = "select * from $table where key_id= '$refNo' ";

$PathImage="../Pictures/";
$res = mysqli_query($con, $sql);
echo "<table>";
while ( $row = mysqli_fetch_array($res))
{
if($rownumber%2==0) $layout="RowEvenCH";
  else
  {
   $layout="RowOddCH";
  }
$datetime = strtotime($row['slot_date']);
$mysqldate = date("D, d M Y", $datetime);
 $item[0] = "";
 $item[0] .=  "<h2>". $row['op'].":" . " ".$mysqldate."</h2>";
     
   if($rownumber%2==0) $layout="RowEvenC";
  else
  {
   $layout="RowOddC";
  }

  $rownumber++;

//$datetime = strtotime($row['date']->createdate);
/*$datetime = strtotime($row['slot_date']);
$mysqldate = date("D, d M Y", $datetime);


  $item[0] = "<tr><td>";
  $item[0] .= " <div id= $layout >";
   $item[0] .=$row['op'] . "</div></td><td><div id= $layout > " . $mysqldate  ."<br/>";
   $item[0] .=   " </div></td></tr> ";
*/
echo $item[0];
 
 }
 echo "</table>";
$table="Config";
$sql = "select * from $table where id= '$refNo' ";

$PathImage="../Pictures/";
$res = mysqli_query($con, $sql);

while ( $row = mysqli_fetch_array($res))
{
if($rownumber%2==0) $layout="RowEvenC";
  else
  {
   $layout="RowOddC";
  }

 $item[0] = "";
// $item[0] .=  "<h2>". $row['op']. "</h2>";
     $item[0] .= " <div id=$layout >";

   $item[0] .=  "<h1>". $row['confName']. "</h1><h2>". $row['conf_theme']."</h2>";
   $item[0] .= " </div> ";

  /* $item[0] .= " <div id=$layout >";

   $item[0] .=  "<h2>". $row['conf_theme']."</h2>";
   $item[0] .= " </div> ";*/

echo $item[0];
 
 }

$sql = "select * from opening_paper where id = '$refNo' ";
//echo "\n $sql \n";
$PathImage="../Pictures/";
$res = mysqli_query($con, $sql);

while ( $row = mysqli_fetch_array($res))
{
if($rownumber%2==0) $layout="RowEvenC";
  else
  {
   $layout="RowOddC";
  }
$dedicated="Is Dedicated to";
 $item[0] = "";
     $item[0] .= " <div id=$layout >";

   
   $item[0] .= " </div> ";

   $item[0] .= " <div id=$layout >";

   $item[0] .=   $row['title']."<br/>" ." <img src=\"" . $PathImage . $row['image'] . "\" width = $ImageSize > ". "<br/>";
   $item[0] .= " </div> ";

echo $item[0];
 
 }
 $table="User";
$sql = "select * from $table where key= '$refNo' ";
//echo "\n $sql \n";
//$PathImage="../Pictures/";
$res = mysqli_query($con, $sql);

while ( $row = mysqli_fetch_array($res))
{
if($rownumber%2==0) $layout="RowEvenC";
  else
  {
   $layout="RowOddC";
  }

 $item[0] = "";
     
   $item[0] .= " <div id=$layout >";

   $item[0] .=   $row['title']." ".$row['last_name']." ".$row['affiliation'];
   $item[0] .= " </div> ";

echo $item[0];
 
 }

$refNo = $_GET['refNo'];
$tablename="keynotes";
$sql = "select * from $tablename where user_id = '$refNo' ";
$res = mysqli_query($con, $sql);
while ( $row = mysqli_fetch_array($res))
{
 if($rownumber%2==0) $layout="RowOddCH";
  else
  {
   $layout="RowOddCH";
  }
   $item[0] = "";
   $item[0] .= " <div id=$layout >";
   $item[0] .=   $row['user_bio'];
   $item[0] .= " </div> ";

echo $item[0];
}
?>

<?php
$Table = "User";

while ( $row2 = mysqli_fetch_array($res2))
{

$sql = "select * from $Table where org = ";

$sql .= $row2['position'] . " order by `Weight`";

//echo $sql;

$res = mysqli_query($con, $sql);
//$rownumber=0;
//echo "<table>";
while ( $row = mysqli_fetch_array($res))
{
  if($rownumber%2==0) $layout="RowEvenC";
  else
  {   
   $layout="RowOddC";
  }
   
  $rownumber++;
  $item[0] = "";
  //"<tr><td>";
if($row2['name']=="Members" || $row2['name']=="Chief Patrons" || $row2['name']=="Patrons"){
  $item[0] .= " <div id=$layout class=\"orgnames\" > <span class=\"nameRed\">" . $row['first_name'];
  $item[0] .= " ".  $row['last_name'] ."</span><br/>";
  // . "</div></td><td> <div id= $layout >";
}else
{
$item[0] .= " <div id=$layout class=\"orgnames\" > <span class=\"nameRed\">" . $row['first_name'];
  $item[0] .= " ".  $row['last_name'] .", ".$row2['name'] ."</span><br/>";

}
if ($row2['position'] > 0 and $row2['position'] < 4)
{
 // $item[0] .= $row2['name'] . ", "; 
}

   $item[0] .=  $row['address'] . "</div>";
   //"<td><tr>";
//   $item[0] .=   " </div> ";

 echo $item[0];

 }
// echo "</table>";
}
?>

<?php

$heading = "<div class='bgRed'>Conference $refNo</div>";
$Table = "conf_name";
$sql = "SELECT * FROM $Table where id = $refNo";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
 {
  $heading .=  "<div class='bgGrey'>" .$row['name']. "</div>";
 }

$heading .=  "<div class='themes'><i>" . "Themes" . "</i></div>";

echo $heading;

$Table = "ResearchTopic";
$sql = "SELECT * FROM $Table where Conf_ID = '$refNo'" ;
$result = mysqli_query($con, $sql);

$rownumber=0;

echo "<table>";

while($row = mysqli_fetch_array($result))
 { 
  if($rownumber%2==0) $layout="RowEvenC";
  else
  {
   $layout="RowOddC";
  }

  $rownumber++;
  $change_label= explode(":", $row['label']);
  $item[0] = "<tr><td>";
  $item[0] .= " <div class= $layout > $rownumber </div></td><td> <div class = $layout >";
   $item[0] .=  $change_label[3] . "</div></td></tr>";
//   $item[0] .=   " </div> ";

 echo $item[0];

 }
 echo "</table>";
?>

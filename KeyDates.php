<?php
$Table = "key_dates";

$sql = "SELECT * FROM $Table" ;

$result = mysqli_query($con, $sql);

$rownumber=0;
?>
<div class='bgRed'>Key Dates</div></br>
<?php
echo "<table class='table_class'>";

while($row = mysqli_fetch_array($result))
 { 
  if($rownumber%2==0) $layout="RowEvenC";
  else
  {
   $layout="RowOddC";
  }

  $rownumber++;

//$datetime = strtotime($row['date']->createdate);
$datetime = strtotime($row['date']);
$mysqldate = date("d F Y", $datetime);


  $item[0] = "<tr><td>";
  $item[0] .= " <div class= $layout >";
   $item[0] .=  $mysqldate . "</div></td><td><div class= $layout > " . $row['name']  ."<br>";
   $item[0] .=   " </div></td></tr> ";

 echo $item[0];

 }
echo "</table>";
?>

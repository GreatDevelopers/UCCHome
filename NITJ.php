<?php
$Table = "data";
$sql = "select * from $Table where id = $refNo ";
$res = mysql_query($sql);
$rownumber=0;
while ( $row = mysql_fetch_array($res))
{
  if($rownumber%2==0) $layout="RowEvenC";
  else
  {   
   $layout="RowOddC";
  }
   
  $rownumber++;
  $item[0] = "";
  $item[0] .= " <div class= $layout > <h1>" . $row['title'] . "</h1>" ;
  if ($row['sub_title'] != "" )
  {
    $item[0] .=  "<h2>" . $row['sub_title'] . "</h2>" ;
  }  
  $item[0] .=  $row['text'];
  $item[0] .=  "</div>";
//   $item[0] .=   " </div> ";

 echo $item[0];

 }

?>

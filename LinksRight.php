<?php

$Table = "data";

$sql = "SELECT * FROM $Table WHERE Container = 'Right' order by `Weight`";

$result = mysql_query($sql);

$rownumber=0;
  $item[0] = " <ul id=\"left_nav\">";

while($row = mysql_fetch_array($result))
 { 
  if($rownumber%2==0) $layout="RowEvenS";
  else
  {
   $layout="RowOddS";
  }

  $rownumber++;

//  $Display = $row['text'];
  $Display = $row['title'];
 
  $item[0] .= "<li class=\"GapR\"> ";
   $item[0] .=  "<a href=\"" . $SERVER['PHP_SELF'];
   $item[0] .=  "?refNo=" . $row['id']  ;
   $item[0] .=  "&#38;fileRef=" . $row['File'] . "\">" . $Display . "</a>";
	$item[0] .= "</li>";
 }
 
    $item[0] .=   "</ul> ";

 echo $item[0];

 
?>

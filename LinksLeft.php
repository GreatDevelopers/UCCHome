<div class=GapBig><div class=title1>
<a href="http://ukiericoncretecongress.com">Home</a>
</div></div>

<div class=title2>
Presenting following six conferences:
</div>


<?php
$ConfNo = "ConfNo";
$Table = "conf_name";

$result = mysqli_query($con, "SELECT * FROM $Table");

$rownumber=0;

while($row = mysqli_fetch_array($result))
 { 
  if($rownumber%2==0) $layout="RowEvenS";
  else
  {
   $layout="RowOddS";
  }

  $rownumber++;

  $item[0] = "";
  $item[0] .= "<div class=\"Gap\"> <div class=$layout >";
   $item[0] .=  "<div class=$ConfNo>Conference $rownumber:</div><a href=\"" . $SERVER['PHP_SELF'];
   $item[0] .=  "?refNo=" . $row['id']  ;
   $item[0] .=  "&#38;fileRef=" . "ConferenceDetail" . "\">" .$row['name']. "</a>";
   $item[0] .=   " </div></div> ";

 echo $item[0];

 }
?>

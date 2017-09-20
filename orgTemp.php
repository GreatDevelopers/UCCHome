<html>
<head>

</head><body>
<link href="css/rai.css" rel="stylesheet" type="text/css"> 
<?php

include 'header.php';
include 'connection.php';


//$HeaderHeigth = "100 %" ;
//$Date = "5 - 8 March 2013";
{

$result = mysql_query("SELECT * FROM key_dates");
$rownumber=0;

while($row = mysql_fetch_array($result))
 { 
   if($rownumber%2==0) $layout="rightsideh1";
else
{
$layout="rightsideh2";
}

$rownumber++;


  $item[0] = "";
  $item[0] .= " <div id=\"rightsideh2\" >";
   $item[0] .=  "<a href=\"" . $SERVER['PHP_SELF'] . "?refNo=" . $row['id'] . "\">" .$row['note']. "</a>";
   $item[0] .= " </div> ";

 echo $item[0];

 

 }

}

$refNo = $_GET['refNo'];




$sql = "select * from key_dates where key_id = '$refNo' ";
//echo "\n $sql \n";

$res = mysql_query($sql);

while ( $row = mysql_fetch_array($res))
{

//echo $row[id];
$item[0] = "";
  
   $item[0] .= " <div id=\"centersideh1\" >";
//   $item[0] .=  "<a href = \"header.php\">" . $row['conf'] . "</a>" ;
   $item[0] .=   $row['name'];
    $item[0] .= " </div> ";
$item[0] .= " <div id=\"centersideh2\" >";
   $item[0] .=   $row['date'];
   $item[0] .= " </div> ";
//echo $row[name] . "<br/>";
echo $item[0];
}

{

$result = mysql_query("SELECT * FROM User");
$rownumber=0;

/*

while($row = mysql_fetch_array($result))
 { 
   if($rownumber%2==0) $layout="rightsideh1";
else
{
$layout="rightsideh2";
}

$rownumber++;


 

 }
*/

  $item[0] = "";
  $item[0] .= " <div id=\"rightsideh2\" >";
   $item[0] .=  "<a href=\"" . $SERVER['PHP_SELF'] . "?refNo=";
   $item[0] .= "org" . "\">" . "COnf Organiser" . "</a>";
   $item[0] .= " </div> ";

 echo $item[0];


}
$refNo = $_GET['refNo'];


if ($refNo == "org")
{
?>
<div id = "centersideh2">
<?php

$sql = "select * from User where org != '0' ";
//echo "\n $sql \n";

$res = mysql_query($sql);

while ( $row = mysql_fetch_array($res))
{
//echo $row[id];
$item[0] = "";
  
   $item[0] .= " <div id=\"centersideh1\" >";
//   $item[0] .=  "<a href = \"header.php\">" . $row['conf'] . "</a>" ;
   $item[0] .=   $row['first_name'];
   $item[0] .= " ".  $row['last_name']  ;
   $item[0] .= " ".  $row['email'];
   $item[0] .= " ".  $row['address'];
   $item[0] .= " </div> ";
//echo $row[name] . "<br/>";
echo $item[0];
}


//echo "<br/>OrgaXXX<br/>";
?>
</div>
<?php
}
else
{




//echo "\n<br/>ref no :: $refNo <br/>\n";

/*$sql = "select * from ResearchTopic where Conf_ID = '$refNo' ";
//echo "\n $sql \n";

$res = mysql_query($sql);

while ( $row = mysql_fetch_array($res))
{
//echo $row[id];   
 $item[0] = "";
  
   $item[0] .= " <div id=\"centersideh2\" >";
//   $item[0] .=  "<a href = \"header.php\">" . $row['conf'] . "</a>" ;
   $item[0] .=   $row['label'] . "<br/>";
   $item[0] .= " </div> ";
//echo $row[name] . "<br/>";
echo $item[0];
 //echo $row[label] . "<br>" ;
 }
 
 */
 
 echo "\n<br/>ref no :: $refNo <br/>\n";
 
} 
include '/home/parveen/public_html/php/fetch1.php';
include 'footer.php';

?>
</body>
</html>

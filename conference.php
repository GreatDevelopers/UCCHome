<html>
<head>

</head><body>
<link href="css/rai.css" rel="stylesheet" type="text/css"> 
<?php
$keydates="Key Dates";
include 'header.php';
include 'connection.php';


//$HeaderHeigth = "100 %" ;
//$Date = "5 - 8 March 2013";
{

$result = mysql_query("SELECT * FROM conf_name");
$rownumber=0;

while($row = mysql_fetch_array($result))
 { 
   if($rownumber%2==0) $layout="leftsideh1";
else
{
$layout="leftsideh2";
}

$rownumber++;


  $item[0] = "";
  
   $item[0] .= " <div id=$layout >";
//   $item[0] .=  "<a href = \"header.php\">" . $row['conf'] . "</a>" ;
   $item[0] .=  "<a href=\"" . $SERVER['PHP_SELF'] . "?refNo=" . $row['id'] . "\">" .$row['conf[A']. "</a>";
   $item[0] .= " </div> ";

 echo $item[0];
//include 'keydates.php';
 

 }

}
$refNo = $_GET['refNo'];

$sql = "select * from conf_name where id = '$refNo' ";
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
//echo $row[name] . "<br/>";
echo $item[0];
}


//echo "\n<br/>ref no :: $refNo <br/>\n";

$sql = "select * from ResearchTopic where Conf_ID = '$refNo' ";
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
 
 
 echo "\n<br/>ref no :: $refNo <br/>\n";
 
 
include '/home/parveen/public_html/php/fetch1.php';
include 'footer.php';

?>
</body>
</html>

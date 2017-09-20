<?php

$q = $_GET[q];
$d = $_GET[d];
require_once('config.php');
mysql_select_db("$db_name",$con);

#$sql = "SELECT label FROM ResearchTopic WHERE Conf_ID='".$q."' ORDER BY label ASC";
$sql1= "Select id from Conferences where Name='$q'" ;
$result1 = mysql_query($sql1);
$id = mysql_result($result1,0,0);
$sql = "SELECT label FROM ResearchTopic WHERE Conf_ID=$id ORDER BY label ASC";

$result = mysql_query($sql);

echo "<select name='District' id='District' >";
if($d!='undefined' && $d!='')
{
        echo " <option value='".$d."' selected='selected'>".$d."</option>";
		
}
while($dist = mysql_fetch_array($result))
{
        #echo "<option value='".$dist['label']."'>".$dist['label']." </option>";
        echo "<option value='".$dist[0]."'>".$dist[0]." </option>";
        #echo "<option value='Hello'>Hello </option>";
}
echo "</select></td></tr>";
	
?>

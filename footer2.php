<?php
//$border="";
//$FooterWidth="100%";
//mysql_select_db("django", $con);

$result = mysql_query("SELECT * FROM ukieri_participants");

echo "<table border='0'>";
echo "<tr>";

while($row = mysql_fetch_array($result))  //To excute result query 
  {
echo "<td>";
echo "<div id=\"imgbackground\">";
echo "<a href='http://".$row['website']."' target='_blank'><img src='http://202.164.53.116/media/". $row['logo']."'/></a>";
echo "</div>";
echo "</td>";
  }
echo "</tr>";
echo "</table>";
mysql_close($con);
?>
<div id="footer">
 Host Organization: Dr B.R Ambedkar National Institute of Technology, Jalandhar and Guru Nanak Dev Engineering College, Ludhiana(Punjab) 
  </div>

</body>
</html>

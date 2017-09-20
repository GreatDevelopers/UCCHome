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
  $item[0] .= " <div class= $layout > <div class='bgRed'>" . $row['title'] . "</div>" ;
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
<p>This page will be updated soon</p>
<!--
<p>
<b>Note: </b>Please quote the Paper ID given in the acceptance letter in all future correspondences.<br><br>

To ensure that the Congress Proceedings are of the highest standard and produced on time, please
follow the following procedure:
<ol>
	<li>Prepare the draft paper to the instructions with an example paper.</li><br>
	<ul><li><a href="http://ukiericoncretecongress.com/Home/files/Document 2-Instructions for Preparing Draft Papers.pdf"><b><u>Instructions for Draft Paper</u></b></a></li>
	<li><a href="http://ukiericoncretecongress.com/Home/files/ExamplePaper.doc"><b><u>Download Example Paper</u></b></a></li>
 <br>
	</ul>
	</li>
	
<li>Submit draft paper before 31 March 2015.</li>
<li>Submit final paper before 30 June  2015.</li>
</ol>
</p>

<p>The Congress has attracted worldwide interest with 300 abstracts received from over 40 countries.
We are confident that it will be a major event, more so since a large number of international
institutions / industrial organizations are also supporting it.
</p>
-->

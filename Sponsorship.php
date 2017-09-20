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
  $item[0] .= " <div class= $layout > <div class='bgRed'>" . $row['title'] ;
  $item[0] .=  $row['sub_title'] . "</div></br>" . $row['text'];
  $item[0] .=  "</div>";
//   $item[0] .=   " </div> ";

 echo $item[0];

 }

?>

<div class= RowOddC>
<br><b>For sponsorship information, please contact:</b>
</div>
<div class= RowEvenC>
<table class="table_class">
	<tr><td><img src="Pictures/rkd1.jpg" height="90px" width="75px"></td>
<td valign="top">Professor Ravindra K Dhir OBE, Congress Chairman	
<br>	University of Dundee, UK / Trinity College Dublin, Ireland</td></tr>
 
 <br>
 
	 <tr><td>Telephone:</td> 
		 <td> +44 121 4278 108</td></tr>
	 
	 <tr><td>Email:</td>
		 <td>r.k.dhir@dundee.ac.uk</td></tr>
</table>

</div>
<div class= RowOddC>
 <br>
  <b>For exhibition related matters, please contact:</b>
</div> <div class= RowEvenC>

<table class="table_class">
	<tr><td><img src="Pictures/hsrai.jpg"/></td>
<td valign="top">Professor H S Rai, Congress Joint Secretary	
  <br>Department of Civil Engineering
  <br>Guru Nanak Dev Engineering College
  <br>Ludhiana – 141 006 (Punjab)
  <br>  
    India</td></tr>
  <br>
  
	  <tr><td>Telephone:</td>  
		  <td>+91 161 2491 193 (O)</td></tr>
      
      <tr><td></td>
          <td>+91 98552 25007 (M)</td></tr>
      <tr><td>Fax:</td>
          <td>+91 161 5064 742, 2502 240 (by attention)</td></tr>
          
      <tr><td>Email:</td>
      <td>hsrai@gndec.ac.in, hardeep.rai@gmail.com</td></tr>
  </table>
            </div>
          

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
  $item[0] .= " <div id= $layout > <h1>" . $row['title'] . "</h1>" ;
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

<p>

For submitting your contribution online, you need to create an account.
</p>
<p>
<a href="http://paper.ukiericoncretecongress.com/index/createaccount">Create Account</a>
</p>
<p>If you are already a registered user, then:
</p>
<p>
<a href="http://paper.ukiericoncretecongress.com/index/login">Log in / Sign in</a>
</p>

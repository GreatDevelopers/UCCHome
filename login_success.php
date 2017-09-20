<?php
session_start();
if(!session_is_registered(myusername)){
header("location:http://ukiericoncretecongress.com/rai/index.php?refNo=24&fileRef=raiSubmit");
}
include "config.php";
include "function.php";
$username=$_GET['user'];

echo "
<html>
<body>
Login Successful

<form name=form1' method='post' action='http://ukiericoncretecongress.com/rai/index.php?refNo=24&fileRef=logout'>


<td><input type='submit' name='Submit' value='Logout'></td>

</form>
</body>

</html>
<html>
<body>
<script type='text/javascript' src='check.js'></script>
<form action='http://ukiericoncretecongress.com/rai/index.php?refNo=24&fileRef=insert' method='post'>
<table border='2'>
<tr>
<th>Title <th> <input type='text' name='title'  size='20' /></th>
<tr><th>Abstract <th> <input type='text' name='abstract'   /></th>";
?>
<?php 
$con = mysql_connect('$host','$username','$password');
if (!$con)
  {
#  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('$db_name', $con);

echo '<tr>';
form_dropdown_field('dropdown','','Conference','Conferences','Name','','State','',"onchange='changedist(this.value)'")


?>
<script type='text/javascript'>setstate()</script><tr><td><div id='dist_name'>Choose topic</div></td><td><div id='dist'></div> 

</table>
<br>

<table border='1'>
<tr>
<th>List of Authors:
</tr>
<b>Note :</b> Your name is automatically consider as author of this paper.<br> For Additional authors fill following form.
</table>

<?
	
		for($i=1; $i<=$number_of_authors; $i++)
		{
			echo "<br><table border=1>";
			echo "<th>Author ".$i."</th>";
			#echo "<input type='hidden' name='Semester' value='".$_POST['Semester']."' /></td>";
			#echo "<td>Max Marks</td><td><input type='text' name='Max_Marks' /></td>";
			echo "<tr></tr><td>First name</td><td><input type='text' name='first_name".$i."'/></td>";
			echo "<td>Last name</td><td><input type='text' name='last_name".$i."' /></td></tr>";
			echo "<tr></tr><td>Give affiliation</td><td><input type='text' name='affiliation".$i."'/></td>";
			form_dropdown_field('dropdown','','Country_'.$i.'','Country','name','','','','');
			echo "</tr>";
#echo <tr>Your Country</td><td><input type='text' name='country".$i."' /></td>";
			echo "<tr><td>  Email</td><td><input type='text' name='email".$i."' /></td></tr>";
			#$i +=1;
				echo "</table><br>";
		}
		echo "<input type='hidden' name='paper_submit' value='paper_submit' />";
		echo "<input type='hidden' name='username' value='$username' />";
	
?>
<input type="submit" />
</form>

</body>
</html>

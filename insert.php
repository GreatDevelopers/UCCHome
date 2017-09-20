<?php
include "config.php";
$con = mysql_connect("$host","$username","$password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$topic_name = $_POST['District'];
$title = $_POST['title'];
$abstract = $_POST['abstract'];
$conference = $_POST['Conference'];
$username = $_POST['username'];
echo "Title :".$title;
echo "<br>";
echo "Topic :".$topic_name;
echo "<br>";
echo "Abstract :".$abstract;
echo "<br>";
mysql_select_db("$db_name", $con); 

if(isset($_POST['paper_submit']))
		{
			
			for($i=1;$i<=$number_of_authors;$i++)
			{	
				#if ($_POST["first_name".$i]=='')
				{
					$sql9 ="Select code from Country where name='".$_POST["Country_".$i]."';";
							$result9 = mysql_query($sql9);
							$code = mysql_result($result9,0,0);
							echo $_POST["email".$i];
								echo "<br>";
				mysql_query("INSERT INTO  User (first_name,	last_name, email,affiliation,country_code) 
				VALUES ('".$_POST["first_name".$i]."','".$_POST["last_name".$i]."','".$_POST["email".$i]."','".$_POST["affiliation".$i]."','".$code."')");
				}
			}	
		}
			
$sql2 ="Select id from ResearchTopic where label='$topic_name'";
$result2 = mysql_query($sql2);
$topic_id = mysql_result($result2,0,0);

$sql1="Select id from User where email='$username'";
$result1 = mysql_query($sql1);
$id = mysql_result($result1,0,0);

$sql3="
INSERT INTO `Paper` (`id`, `title`, `authors`, `emailContact`, `abstract`, `topic`, `nb_authors_in_form`, `status`, `isUploaded`, `format`, `fileSize`, `submission_date`, `assignmentWeight`, `inCurrentSelection`, `CR`, `id_conf_session`, `position_in_session`, `paper_type`, `images`) 
VALUES ('', '$title', '', '$username', '', '$topic_id', '4', '1', 'N', 'pdf', NULL, NULL, NULL, 'Y', '1', NULL, NULL, '0', '');";
$result3=mysql_query($sql3);


$sql4="Select max(id) from Paper";
$result4 = mysql_query($sql4);
$paper_id = mysql_result($result4,0,0);
#echo "Paper ID :".$paper_id;
$sql5="INSERT INTO `Abstract` (`id_paper`, `id_section`, `content`) VALUES ('$paper_id', '1', '$abstract');";
$result5 = mysql_query($sql5);

$sql6="INSERT INTO `Author` (`id_paper`, `id_user`, `position`,`contact`) VALUES ('$paper_id', '$id', '1','Y');";
$result6 = mysql_query($sql6);
#echo $sql6;

if(isset($_POST['paper_submit']))
	{
		$j=2;
	for($i=1;$i<=$number_of_authors;$i++)
			{	
				$sql7="Select id from User where email='".$_POST["email".$i]."';";
				#$sql7="Select id from User where email='".$username."';";
				$result7 = mysql_query($sql7);
				$user_id = mysql_result($result7,0,0);
				#$position =  $i++;
				$sql8="INSERT INTO `Author` (`id_paper`, `id_user`, `position`,`contact`) VALUES ('$paper_id', '$user_id','".$j."','N');";
				$result8 = mysql_query($sql8);
				$j++;
			}	
	}

$sql7="INSERT INTO `PaperAnswer` (`id_paper`, `id_question`, `id_answer`) VALUES ('$paper_id', '1', '1');";
$result7 = mysql_query($sql7);

#if (!mysql_query($sql,$con))
 # {
  #die('Error: ' . mysql_error());
  #}
#echo "value is submitted";
echo "<p>Your Abstract is submitted<p>";

mysql_close($con);

echo"
<form name=form1' method='post' action='logout.php'>

<td><input type='submit' name='Submit' value='Logout'></td>

</form>";
?>

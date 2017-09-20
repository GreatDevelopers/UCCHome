<?
include "config.php";
$con = mysql_connect("$host","$username","$password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("$db_name", $con);

function form_dropdown_field($type,$options,$name,$table,$table_colume,$class,$id,$value,$event)
       {
               if($options[0]!='')
               {
                       echo "<td>".str_replace('_',' ',$name)."<select name='".$name."'
class='".$class."' id='".$id."'>";
                       echo "<option value='".$value."' selected='selected'>".$value."</option>";
                       foreach($options as $key=>$option)
                       {
                               echo "<option value='".$option."'>".str_replace('_','
',$option)."</option>";
                       }
                       echo "</td></select>";
               }
               else
               {
                       if($type=="dropdown")
                       {
                               $sql="Select distinct ".$table_colume." from ".$table."";
                               $result = mysql_query($sql) or die("Error in Query: $sql " .mysql_error());
                               echo "<td>".str_replace('_',' ',$name)."<td><select name='".$name."' class='".$class."' id='".$id."' ".$event.">";
                               
                               echo "<option value='".$value."' selected='selected'>".$value."</option>";
                               while($row=mysql_fetch_array($result))
                               {
                                       if($row[0]!='' && $row[0]!='N/A')
                                       echo " <option value='".$row[0]."'>".$row[0]."</option> ";
                               }
                               echo "</td></select>";
                       }
               }
       }
?>

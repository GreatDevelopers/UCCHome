<?php
$Table = "data";
$result = mysqli_query($con, "SELECT * FROM $Table where id ='2'");

echo "<table>";
while($row = mysqli_fetch_array($result))
{
    $layout="RowOddCH";

    $item[0] = "";
    $item[0] .= " <div class=$layout>";

    if($row['title']!=null)
    {
	$item[0] .= "<h1>".$row['title'].":"." ". $row['sub_title']."</h1>";
    }
    $item[0] .=   $row['text'] ;
    // $item[0] .= "</div>";

    echo $item[0];
}

$Table = "images";
$HeaderHeigth="100%";
$ImageSize="100%";
$PathImage = "Pictures/";
$result = mysqli_query($con, "SELECT * FROM $Table where id <= '7'");

$rownumber=0;

//echo "<div class=\"footerLogoH\">";

echo "<tr style='background:lightgray;'>";
while($row = mysqli_fetch_array($result))
{
    $resultthree = mysqli_query($con, "select * from User where key_id = '".$row['id']."'");
    $d = mysqli_fetch_array($resultthree);
    $rownumber++;
    echo "<td><a href=\"" . $PHP_SELF . "?refNo=" . $row['id'] . "&#38;fileRef=" . "images" . "\">" . " <img src=\"" . $PathImage . $row['image'] . "\" style = \" width:".$ImageSize.";\"  alt= \"logo\" title='".$d['first_name']." ".$d['last_name'].", ".$d['affiliation'].", ".$d['address']."'> "."</a></td>";
//echo " <img src=\"" . $PathImage . $row['image'] . "\" width = $ImageSize > ";
//echo  $row['caption'] ;

//echo "</div>";

}
echo "</tr><tr style='background:lightgray'>";
$resulttwo = mysqli_query($con, "select * from User where key_id !='0' AND key_id <='7'");
while($data_all = mysqli_fetch_array($resulttwo))
{
$name = $data_all['first_name'];
echo "<td style='text-align:left;font-size:12px'>".$name[0].". ".$data_all['last_name'].", ".$data_all['address']."</td>";
}
//echo "</div>";
echo "</div>";
echo "</tr></table></table>";

?>
<p>
UKIERI Concrete Congress is a biennial event which has been established by a group of academics from the UK and India who came together in the year 2007, through a research project, funded by the UK-India Education and Research Initiative (UKIERI), and chaired by Professor Ravindra K Dhir. </p><p>In 2013, a Congress was held at Dr B R Ambedkar National Institute of Technology, Jalandhar, India that dealt with Innovations in Concrete Construction. The Congress identified the link between research,development and exploitation of new ideas, materials and techniques within the concrete and construction fields.
</p>
<p>
In 2015 a major concrete based event will bring together those involved in research, technological development and their transfer into commercial opportunities and social well- being. This gathering will identify with the construction industry at
large providing new opportunities based on creative thinking, technical knowledge, expertise and practical application. Emphasis will be placed on bringing to market the fruits of research and development. New products, techniques, processes and application will be demonstrated. Efficiency, effectiveness and economy aimed at industrial profitability that is needed now and yet sustainable in the longer term will under write the presentations. It is industry that creates wealth and when wealth is used
wisely there is benefit for all. In bringing technology and industry together can be summed up in three outcomes, thinking
together, working together and achieving together.
</p>
<p>
This Congress will be a meeting point for achieving these actions and form the basis for concrete, construction and their
industrial future.
</p>
<?php
/*
echo "</td></tr><tr><td> */?>
</div><div id='fade_base' style='margin:20px 0px;border:1px red; padding:5px;line-height:1.8em;text-align:center;font-size:30px'>
<strong><em><a id='fade_link'></a></em></strong>
</div>
<?php /*</td></tr></table>";
*/
?>
<script type="text/javascript" src="marquee.js"></script>

<div class="fb-page" data-href="https://www.facebook.com/UkieriConcreteCongress" data-width="500" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/UkieriConcreteCongress"><a href="https://www.facebook.com/UkieriConcreteCongress">UCC</a></blockquote></div></div>

            <a class="twitter-timeline"  href="https://twitter.com/search?q=%23ukieri%20AND%20%23concrete%20AND%20%23congress" data-widget-id="308981516296388608">Tweets about #ukieri AND #concrete AND #congress</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>                          

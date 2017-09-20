<html>
<head>
<link rel="SHORTCUT ICON" href="Pictures/ucc_f.ico">
<link href="css/ukieriRai.css" rel="stylesheet" type="text/css"> 
<title>UCC</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="galleria-1.2.9.min.js"></script>
    <script type="text/javascript" src="plugins/facebook/galleria.facebook.js"></script>
<script  type="text/javascript" src="plugins/flickr/galleria.flickr.min.js"></script>
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div id="contain">   <!-- container starts -->

<!--so many days left for abstract submission -->
<?php
$total_days_jan=cal_days_in_month(CAL_GREGORIAN,1,2012);
$total_days_feb=cal_days_in_month(CAL_GREGORIAN,2,2012);
$total_days_march=cal_days_in_month(CAL_GREGORIAN,3,2012);

$total_days=$total_days_jan+$total_days_feb+$total_days_march;


//echo "jan=".$total_days_jan." ";
//echo "feb=".$total_days_feb." ";
//echo "march=".$total_days_march." ";

//echo "total days=".$total_days." ";

$current_date=date('z');

//echo "current day=".$current_date." ";
$lastdate=$total_days-$current_date;
$show_lastdate= "$lastdate days left for abstract submission!";
//echo $show_lastdate;
?>



<?php
include 'mysql.php';
include 'rai.php';

$tablename="Config";
$HeaderHeigth="100";
$Date = "2 - 5 November 2015 Jalandhar Punjab India";
$result = mysql_query("SELECT * FROM $tablename");
$PathImage = "Pictures/";
while($row = mysql_fetch_array($result))
  { 


$item[0].= "";
$item[0].= "<div class=\"bg\" ><div id=\"header\" >"; 

 $item[0].= "<div class='headerPadding'> <table><tr style=\"\"><td style=\"width:55px; \">";
 $item[0] .= "<a href='http://ukiericoncretecongress.com'> <img src=\"";
 $item[0] .= $PathImage . $row['image'] . "\" width = \"$HeaderHeigth\"  alt=\"logo\"></a>";
   $item[0].= "</td><td style=\"background:url('images/baner.jpg') no-repeat;\">";
  $item[0] .= "<div class=\"headh2\">" . $row['confName'];
  $item[0] .= "</div><div class=\"headh1\">" . $row['conf_theme'] ;
  $item[0] .= "</div><div class=\"headh2\">" . $Date . "</div>";
 $item[0] .= "</td></tr></table></div><div class=\"navigator\"><ul class=\"semiopaquemenu\">
<li><a href=\"http://ukiericoncretecongress.com/Home\">Home</a></li>
<li><a href=\"?refNo=27&amp;fileRef=TradeFair\">Conferences</a></li>
<!--<li><a href=\"?refNo=26&amp;fileRef=TradeFair\">Registration</a></li>-->
<!--<li><a href=\"?refNo=23&amp;fileRef=Submit\">Submit Paper</a></li>-->
<li><a href=\"?refNo=22&amp;fileRef=TradeFair\">Downloads</a></li>
</ul> </div>";

 echo $item[0];
  }
?>




<!--<div id='scrollText'>
<div id='imageScroller'>
				<div id="viewer" class="js-disabled"><b id="r"><a class="wrapper" id="nonoo" href="#">Registration details will be updated soon...</b></a>&nbsp;
					<a class="wrapper" id="nonoo" href="#" ><b id="r"> 
</b>-->
<?php /*echo "<script type=\"text/javascript\">

   var arMessage = new Array(

   'Thanks for overwhelming response' 

   );

   var ind = Math.floor(Math.random() * 1);

   document.getElementById(\"r\").innerHTML=arMessage[ind];

</script>"; */?> <!--</a>
				</div>
</div>
</div>-->
			





<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
		<script type="text/javascript">
			$(function() {
			
			  //remove js-disabled class
				$("#viewer").removeClass("js-disabled");
			
			  //create new container for images
				$("<div>").attr("id", "container").css({ position:"absolute"}).width($(".wrapper").length * 470).height(30).appendTo("div#viewer");
			  	
				//add images to container
				$(".wrapper").each(function() {
					$(this).appendTo("div#container");
				});
				
				//work out duration of anim based on number of images (1 second for each image)
				var duration = $(".wrapper").length * 15500;
				
				//store speed for later (distance / time)
				var speed = (parseInt($("div#container").width()) + parseInt($("div#viewer").width())) / duration;
								
				//set direction
				var direction = "rtl";
				
				//set initial position and class based on direction
				(direction == "rtl") ? $("div#container").css("left", $("div#viewer").width()).addClass("rtl") : $("div#container").css("left", 0 - $("div#container").width()).addClass("ltr") ;
				
				//animator function
				var animator = function(el, time, dir) {
				 
					//which direction to scroll
					if(dir == "rtl") {
					  
					  //add direction class
						el.removeClass("ltr").addClass("rtl");
					 		
						//animate the el
						el.animate({ left:"-" + el.width() + "px" }, time, "linear", function() {
												
							//reset container position
							$(this).css({ left:$("div#imageScroller").width(), right:"" });
							
							//restart animation
							animator($(this), duration, "rtl");
							
							//hide controls if visible
							($("div#controls").length > 0) ? $("div#controls").slideUp("slow").remove() : null ;			
											
						});
					} else {
					
					  //add direction class
						el.removeClass("rtl").addClass("ltr");
					
						//animate the el
						el.animate({ left:$("div#viewer").width() + "px" }, time, "linear", function() {
												
							//reset container position
							$(this).css({ left:0 - $("div#container").width() });
							
							//restart animation
							animator($(this), duration, "ltr");
							
							//hide controls if visible
							($("div#controls").length > 0) ? $("div#controls").slideUp("slow").remove() : null ;			
						});
					}
				}
				
				//start anim
				animator($("div#container"), duration, direction);
				
				//pause on mouseover
				$("a.wrapper").on("mouseover", function() {
				  
					//stop anim
					$("div#container").stop(true);
					
					//show controls
					($("div#controls").length == 0) ? $("<div>").attr("id", "controls").appendTo("div#outerContainer").css({ opacity:0.7 }).slideDown("slow") : null ;
					($("a#rtl").length == 0) ? $("<a>").attr({ id:"rtl", href:"#", title:"rtl" }).appendTo("#controls") : null ;
					($("a#ltr").length == 0) ? $("<a>").attr({ id:"ltr", href:"#", title:"ltr" }).appendTo("#controls") : null ;
					
					//variable to hold trigger element
					var title = $(this).attr("title");
					
					//add p if doesn't exist, update it if it does
					($("p#title").length == 0) ? $("<p>").attr("id", "title").text(title).appendTo("div#controls") : $("p#title").text(title) ;
				});
				
				//restart on mouseout
				$("a.wrapper").on("mouseout", function(e) {
				  
					//hide controls if not hovering on them
					(e.relatedTarget == null) ? null : (e.relatedTarget.id != "controls") ? $("div#controls").slideUp("slow").remove() : null ;
					
					//work out total travel distance
					var totalDistance = parseInt($("div#container").width()) + parseInt($("div#viewer").width());
														
					//work out distance left to travel
					var distanceLeft = ($("div#container").hasClass("ltr")) ? totalDistance - (parseInt($("div#container").css("left")) + parseInt($("div#container").width())) : totalDistance - (parseInt($("div#viewer").width()) - (parseInt($("div#container").css("left")))) ;
					
					//new duration is distance left / speed)
					var newDuration = distanceLeft / speed;
				
					//restart anim
					animator($("div#container"), newDuration, $("div#container").attr("class"));

				});
												
				//handler for ltr button
				$("#ltr").on("click", function() {
				 					
					//stop anim
					$("div#container").stop(true);
				
					//swap class names
					$("div#container").removeClass("rtl").addClass("ltr");
										
					//work out total travel distance
					var totalDistance = parseInt($("div#container").width()) + parseInt($("div#viewer").width());
					
					//work out remaining distance
					var distanceLeft = totalDistance - (parseInt($("div#container").css("left")) + parseInt($("div#container").width()));
					
					//new duration is distance left / speed)
					var newDuration = distanceLeft / speed;
					
					//restart anim
					animator($("div#container"), newDuration, "ltr");
				});
				
				//handler for rtl button
				$("#rtl").on("click", function() {
										
					//stop anim
					$("div#container").stop(true);
					
					//swap class names
					$("div#container").removeClass("ltr").addClass("rtl");
					
					//work out total travel distance
					var totalDistance = parseInt($("div#container").width()) + parseInt($("div#viewer").width());

					//work out remaining distance
					var distanceLeft = totalDistance - (parseInt($("div#viewer").width()) - (parseInt($("div#container").css("left"))));
					
					//new duration is distance left / speed)
					var newDuration = distanceLeft / speed;
				
					//restart anim
					animator($("div#container"), newDuration, "rtl");
				});
			});
		</script>
 
 <?php echo "</div>
</div>" ?>

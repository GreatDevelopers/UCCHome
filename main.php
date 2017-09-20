<?php

$refNo = $_GET['refNo'];
$fileRef = $_GET['fileRef'];

if ($fileRef != "") 
  $fileToInclude = $fileRef . ".php";
else $fileToInclude = "home.php";

?>
<div id="ColLeft">
    <!-- <?php echo $fileToInclude; ?> -->
   <?php include 'LinksRight.php';  ?>
  </div>
<div class="ColMid">

    <!-- <?php echo $fileToInclude; ?> -->
  <?php
	
  if ( file_exists($fileToInclude) ) include $fileToInclude;
  else   include "NoFile.php";
  ?>

  
   <!--<div class="ColLeft">   <?php// include 'LinksLeft.php';  ?>
   </div>-->
  

 

<?php

?>


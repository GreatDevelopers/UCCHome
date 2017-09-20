<?php

//=========================
// Function to insert image
//=========================

function InsertImage($ImageName, $ImagePath, $ImageAtlText, $ImageWidth, $ImageHeight){
    $ImageURL = $ImagePath . $ImageName ;

    $ImageTag = "";
    $ImageTag .= "<img src=\"" . $ImageURL . "\" alt=\"";
    $ImageTag .= $ImageAtlText . "\" ";

    if ($ImageWidth != ""){
      $ImageTag .= "width= \"" . $ImageWidth . "\" ";
    }
    if ($ImageHeight != ""){
      $ImageTag .= "height= \"" . $ImageHeight . "\" ";
    }

    return "\n" . $ImageTag . ">\n";
}
?>


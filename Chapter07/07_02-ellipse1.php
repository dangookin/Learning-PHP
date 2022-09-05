<?php
    // output a blue circle
    header("Content-type: image/png");

    // set canvas size
    $width = 250;
    $height = $width;
    $image = imagecreate($width,$height);

    // the first color allocated becomes the background color
    $bg = imagecolorallocate($image,255,255,255);
    // create a blue
    $blue = imagecolorallocate($image,0,0,255);
    
    // set the image on the canvas
    imagefilledellipse($image,$width/2,$height/2,$width,$height,$blue);

    imagepng($image);
?>
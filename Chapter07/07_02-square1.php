<?php
    // output a green square
    header("Content-type: image/png");

    // set canvas size
    $width = 250;
    $height = $width;       // make it a square
    $image = imagecreate($width,$height);

    // the first color allocated becomes the background color
    $bg = imagecolorallocate($image,255,255,255);
    // create a green
    $green = imagecolorallocate($image,0,255,0);

    // set the image on the canvas
    imagefilledrectangle($image,0,0,$width-1,$height-1,$green);

    imagepng($image);
?>
<?php
    // output crossed lines
    header("Content-type: image/png");

    // Set canvas size
    $width = 250;
    $height = $width;
    $image = imagecreate($width,$height);

    // the first color allocated becomes the background color
    $bg = imagecolorallocate($image,255,255,255);
    // use black for the lines
    $black = imagecolorallocate($image,0,0,0);

    // set the image on the canvas
    imageline($image,0,0,$width-1,$height-1,$black);
    imageline($image,$width-1,0,0,$height-1,$black);

    imagepng($image);
?>
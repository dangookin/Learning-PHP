<?php
    header("Content-type: image/png");
    /*
        remember to set path if the file isn't in
        the same directory
    */
    $filename = "green_square.png";

    // create a working canvass for the image file
    $image = imagecreatefrompng($filename);

    // get image size
    $width = imagesx($image);
    $height = imagesy($image);

    // no need to set background color
    $white = imagecolorallocate($image,255,255,255);

    imagerectangle($image,0,0,$width-1,$height-1,$white);

    imagepng($image);
?>
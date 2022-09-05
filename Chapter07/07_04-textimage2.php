<?php
    header("Content-type: image/png");

    /*
        - set the font name
        - I uploaded this font from my system
        - it's not freeware so it's not distributed
        with the other files in this course
    */
    $font = "Georgia Bold.ttf";

    $image = imagecreate(275,50);

    // white background
    $bg = imagecolorallocate($image,255,255,255);
    // black text
    $black = imagecolorallocate($image,0,0,0);

    imagettftext($image,24,0,10,35,$black,$font,"Learning PHP");
    imagepng($image);
?>
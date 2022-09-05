<?php
    header("Content-type: image/png");

    // set the font name
    $font = "Georgia Bold.ttf";
    // obtain the string passed
    if( !$_GET ) {
        // alternate string if no argument present
        $text = "Your name here";
    } else {
        $text = $_GET['text'];
    }

    $image = imagecreate(400,50);

    // gray background
    $bg = imagecolorallocate($image,128,128,128);
    // black text
    $black = imagecolorallocate($image,0,0,0);
    // white text
    $white = imagecolorallocate($image,255,255,255);

    // output black image first, to create the shadow
    imagettftext($image,24,0,10,40,$black,$font,$text);
    // offset and output white image
    imagettftext($image,24,0,9,39,$white,$font,$text);
    imagepng($image);
?>
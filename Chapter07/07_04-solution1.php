<?php
    header("Content-type: image/jpeg");
    /*
        i'm re-using the sunset.jpg file as well
        as the font file I uploaded
        remember to set path if the file isn't in
        the same directory
    */
    $filename = "sunset.jpg";
    $font = "Georgia Bold.ttf";

    // create a GD image from the JPEG file
    $image = imagecreatefromjpeg($filename);

    // no need to set background color
    $black = imagecolorallocate($image,0,0,0);
    $white = imagecolorallocate($image,255,255,255);

    /*
        you may need to fine-tune the image position
        i'm using variables for eaiser adjustment
        also setting a string for the caption text
    */
    $xpos = 150;
    $ypos = imagesy($image)-100;     // caption 100 pixels from the bottom
    $font_size = 144;
    $caption_text = "Another beautiful sunset!";
    /*
        generating the white text second, makes it appear
        better on the sunset image
    */
    imagettftext($image,$font_size,0,$xpos+1,$ypos+1,$black,$font,$caption_text);
    imagettftext($image,$font_size,0,$xpos  ,$ypos  ,$white,$font,$caption_text);

    // set the image and caption
    imagejpeg($image);
?>
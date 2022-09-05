<?php
    /*
        - because the image is a JPEG you must update
        the various functions to deal with this
        type of image
    */
    // update the header MIME type
    header("Content-type: image/jpeg");
    /*
        remember to set path if the file isn't in
        the same directory
    */
    $filename = "sunset.jpg";

    // the file is a JPEG so use its conversion function
    $image = imagecreatefromjpeg($filename);

    // no need to set background color
    $black = imagecolorallocate($image,0,0,0);

    /*
        - the values you use need not match mine exactly
        - honestly, I just eyeballed the image and kept
        typing in new values until it looked right
    */
    imagefilledellipse($image,2030,620,350,350,$black);

    // use JPEG here as well
    imagejpeg($image);
?>
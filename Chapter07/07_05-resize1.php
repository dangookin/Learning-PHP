<?php
    // output a PNG image
    header("Content-type: image/png");

    /*
        - remember to set a full or relative pathname
        to the image file if it's not in the current
        directory
    */
    $imagefile = "PHP-logo.png";

    // load and convert the image
    $image = imagecreatefrompng($imagefile);
    
    /*
        -scale the image
        - values are based on the current pixel
        size, not a percentage
    */
    $increase = 150;        // 150 percent
    $width = imagesx($image) * ($increase/100);     // make it a percent
    $height = imagesy($image) * ($increase/100);     // make it a percent

    // scale the image $increase percent
    $scaled = imagescale($image,$width,$height);

    // output the newly-created image
    imagepng($scaled);
?>
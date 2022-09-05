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
    
    // set background color to white for rotation
    $bg = imagecolorallocate($image,0,0,0);
    
    // rotate the image the given number of degrees
    $rotated = imagerotate($image,45,$bg);

    // output the newly-created image
    imagepng($rotated);
?>
<?php
    // output a PNG image
    header("Content-type: image/png");

    /*
        - obtain basic data
        - if you're usijng another file, set it as the $imagefile
        fetch the variables from the $_GET superglobal
        - remember to change the filetype in the various
        functions if you're using a JPEG or GIF
    */
    $imagefile = "PHP-logo.png";
    $manipulate = $_GET[manipulate];
    $degrees = $_GET[degrees];
    $scale = $_GET[size];

    // load and convert the image
    $image = imagecreatefrompng($imagefile);
    
    /*
        - these test rely on the value of $manipulate
        - the other values, $degrees and $scale, are
        supplied anyhoo and they're ignored if they're
        not needed
    */
    if( $manipulate=="rotate" ) {
        // rotate the image
        // set background color to white for rotation
        $bg = imagecolorallocate($image,0,0,0);
        // rotate the image the given number of degrees
        $rotated = imagerotate($image,$degrees,$bg);
        // output the newly-created image
        imagepng($rotated);
    } else if( $manipulate=="size" ) {
        /*
            -scale the image
            - scale values must be reduced by 100% to
            reflect a percentage and not a whole value
        */
        $width = imagesx($image) * ($scale/100);
        $height = imagesy($image) * ($scale/100);
        // scale the image per input
        $scaled = imagescale($image,$width,$height);
        // output the newly-created image
        imagepng($scaled);
    } else {
        // output image as-is if no options received
        imagepng($image);
    }
?>
<?php
    // output a dark red triangle
    header("Content-type: image/png");

    // Set canvas size
    $width = 250;
    $height = $width;
    $image = imagecreate($width,$height);

    // the first color allocated becomes the background color
    $bg = imagecolorallocate($image,255,255,255);
    // create a dark red (better for video compression)
    $dark_red = imagecolorallocate($image,137,8,8);

    /*
        - create points for the polygon
        - each point is a pair of X,Y coordinates
        - 0,0 is the upper left corner of the canvas
    */
    $points = array(
        0, $height-1,
        $width/2, 0,
        $width-1,$height-1
    );
    // set the image on the canvas
    imagefilledpolygon( $image, $points, count($points)/2, $dark_red );

    imagepng($image);
?>
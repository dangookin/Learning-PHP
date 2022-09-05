<?php
    // output all the shapes on top of each other
    header("Content-type: image/png");

    // Set canvas size
    $width = 250;
    $height = $width;
    $image = imagecreate($width,$height);

    // the first color allocated becomes the background color
    $bg = imagecolorallocate($image,255,255,255);
    // colors for each of the shapes
    $green = imagecolorallocate($image,0,255,0);
    $blue = imagecolorallocate($image,0,0,255);
    $dark_red = imagecolorallocate($image,137,8,8);
    $black = imagecolorallocate($image,0,0,0);

    // polygon points
    $points = array(
        0, $height-1,
        $width/2, 0,
        $width-1,$height-1
    );

    // set images on the canvas
    imagefilledrectangle($image,0,0,$width-1,$height-1,$green);
    imagefilledellipse($image,$width/2,$height/2,$width,$height, $blue);
    imagefilledpolygon( $image, $points, count($points)/2, $dark_red );
    imageline($image,0,0,$width-1,$height-1,$black);
    imageline($image,$width-1,0,0,$height-1,$black);

    imagepng($image);
?>
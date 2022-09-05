<?php
    // output a large plus
    header("Content-type: image/png");

    // Set canvas size
    $width = 250;
    $height = $width;
    $image = imagecreate($width,$height);

    // the first color allocated becomes the background color
    $bg = imagecolorallocate($image,255,255,255);
    // use black for the lines
    $black = imagecolorallocate($image,0,0,0);

    // set the image on the canvas
    /*
        - draw three vertical lines parallel to each other
        - the x1 and x2 values are drawn less than (-1) and
        greater than (+1) their original values
    */
    imageline($image,$width/2-1,0,$width/2-1,$height-1,$black);
    imageline($image,$width/2,0,$width/2,$height-1,$black);
    imageline($image,$width/2+1,0,$width/2+1,$height-1,$black);
    /*
        - draw three horizontal lines parallel to each other
        - the y1 and y2 values are drawn less than (-1) and
        greater than (+1) their original values
    */
    imageline($image,0,$height/2-1,$width-1,$height/2-1,$black);
    imageline($image,0,$height/2,$width-1,$height/2,$black);
    imageline($image,0,$height/2+1,$width-1,$height/2+1,$black);
    /*
        - you could create a function that handles the thickness,
        but ensure that you draw the lines parallel on either
        side of the original coordinates
        - you muse use the line formula y=mx+b to calculate the
        slope so that the parallel lines are properly plotted

        - another way is to use the 'imagefillrectangle()' function,
        though it works best only on vertical and horizontal
        lines
        - if you want to plot a diagonal line, you must calculate
        the slope and then use the 'imagefillpolygon()' function
        to fill the sloping line

        - lots of possibilities here!
    */
    imagepng($image);
?>
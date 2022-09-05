<?php
    header("Content-type: image/png");

    $image = imagecreate(130,40);

    // white background
    $bg = imagecolorallocate($image,255,255,255);
    // black text
    $black = imagecolorallocate($image,0,0,0);

    imagestring($image,5,10,10,"Learning PHP",$black);
    imagepng($image);
?>
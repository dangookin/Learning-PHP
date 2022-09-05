<html>
<head>
    <title>Chapter 5, Movie 3</title>
</head>
<body>
    <h1>Uploaded File</h1>
<?php
/*
    - this is the homepath for my server; it's very specific!
    - you may wan to try using:
        $homepath = $_SERVER['document_root'];
    or some other way to know exactly where to store the uploaded
    file for local access
*/
//  $homepath = $_SERVER['document_root'];      // use on GoDaddy and other hosting services
    $homepath = "/var/services/homes/MrTest/www";   // specific to my machine
    $localpath = "/Chapter05/";         // where I'm storing the file locally
    $filename = $_FILES['uploaded']['name'];
    $filepath = $homepath.$localpath.$filename;     // full pathname destination
    $tempname = $_FILES['uploaded']['tmp_name'];

    // confirm that it's a JPEG
    $filetype = $_FILES['uploaded']['type'];
    if( $filetype != "image/jpeg") {
        print "<p>$filename must be a jpeg image</p>";
    } else {
        // move the file and check for errors
        if( move_uploaded_file( $tempname, $filepath ) ) {
            chmod( $filepath, 0755 );           // specific to my server
            print "</p>$tempname moved to $filepath</p>";
            print "</p><img src=$filename /></p>";
        } else {
            print "</p>Unable to move $tempname to $filepath</p>";
        }
    }
?>
</body>
</html>
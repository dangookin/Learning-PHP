<html>
<head>
    <title>Chapter 5, Movie 3</title>
</head>
<body>
    <h1>Uploaded File</h1>
<?php
    /*
        - obtain details from the '$_FILES' superglobal
        - 'uploaded' is the name used in the form
        - the second demension represents attributes
    */
    $filename = $_FILES['uploaded']['name'];        // the filename
    $filetype = $_FILES['uploaded']['type'];        // the file's MIME type
    $filesize = $_FILES['uploaded']['size'];        // the file size in bytes
    $tempname = $_FILES['uploaded']['tmp_name'];    // the file's temporary name/storage

    // output the details
    print "<p>Filename is <strong>$filename</strong></p>";
    print "<p>File type is <strong>$filetype</strong></p>";
    print "<p>File size is <strong>$filesize</strong> bytes</p>";
    print "<p>Temporary filename is <strong>$tempname</strong></p>";

    // the temporary file is removed after the script terminates
?>
</body>
</html>
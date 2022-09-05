<html>
<head>
    <title>Chapter 3, Movie 5</title>
</head>
<body>
    <h1>Including PHP Code</h1>
    <h2>Some strings to modify</h2>
<?php
    /*
        - this directive assumes that the named file is
        in the same directory as this PHP file
        - use the $_SERVER superglobal to obtain and
        build full pathnames, as coved in another video
    */
    include "03_05-include2.php";

    $text = "Hello there, web!";
    // the 'firstWord()' function is in the included file
    $a = firstWord("Hello there, web!");

    print '<ol>';
    print "<li>$text</li>";
    print "<li>$a</li>";
    print '</ol>';
?>
</body>
</html>
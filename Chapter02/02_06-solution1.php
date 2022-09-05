<html>
<head>
    <title>Chapter 2, Movie 6</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    $string = "preposturous";

    // here is one way to do it, remember to escape the double quotes!
    printf("<p>The word \"$string\" has %d characters</p>",strlen($string));

    // here I've made '$string' an argument and use the '%s' placeholder to output
    printf("<p>The word \"%s\" has %d characters</p>",$string,strlen($string));

    /*
        here is a trick you can pull in PHP, but not many other languages.
        The first argument, the format string, can be enclosed in single
        quotes. This means you don't need to escape the double quotes
    */
    printf('<p>The word "%s" has %d characters</p>',$string,strlen($string));
?>
</body>
</html>
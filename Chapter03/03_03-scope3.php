<html>
<head>
    <title>Chapter 3, Movie 3</title>
</head>
<body>
    <h1>PHP Scope</h1>
<?php
    // function block
    global $offset;     // make available to the all the code

    function firstWord($string) {
        $offset = strpos($string," ");
        $r = substr($string,0,$offset);
        return($r);
    }
?>
<h2>Some strings to modify</h2>
<?php
    // variables and stuff
    $text = "Hello there, web!";
    $a = firstWord($text);
?>

<!-- Other web stuff here -->

<?php
    // output
    print '<ol>';
    print "<li>$text</li>";
    print "<li>$a</li>";
    print "<li>$offset</li>";
    print '</ol>';
?>
</body>
</html>
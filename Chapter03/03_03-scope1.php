<html>
<head>
    <title>Chapter 3, Movie 3</title>
</head>
<body>
    <h1>PHP Scope</h1>
<?php
    /*
        - this PHP block contains a function called
        from another PHP block
    */
    function firstWord($string) {
        // locate the first space found in the string
        $offset = strpos($string," ");

        $r = substr($string,0,$offset);
        return($r);
    }
?>

<h2>Some strings to modify</h2>

<?php
    $text = array(
        "This is text",
        "Another string",
        "One more just because"
    );

    foreach( $text as $t )
        printf("<p><em>%s</em> becomes <em>%s</em></p>",$t,firstWord($t));
?>
</body>
</html>
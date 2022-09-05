<html>
<head>
    <title>Chapter 2, Movie 4</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    $values = array ( 5, 11, -7, 7, 2, 14, 3, 6 );

    print "<h2>Testing Ranges</h2>";
    foreach ($values as $test) {
        /*
            - when '$test' is greater than or equal to 7 OR
            '$test' is equal to 3, the condition is true
            - you can also use the 'or' keyword instead of
            the || operator
        */
        if( $test>=7 || $test==3 )
            print "<p>$test is within range</p>";
        else
            print "<p>$test is out of range</p>";
    }
?>
</body>
</html>
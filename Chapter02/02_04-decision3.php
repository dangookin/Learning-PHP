<html>
<head>
    <title>Chapter 2, Movie 4</title>
</head>
<body>
    <h1>Multiple Conditions</h1>
<?php
    $values = array ( 5, 11, -7, 7, 2, 14, 3, 6 );

    print "<h2>Testing Ranges</h2>";
    foreach ($values as $test) {
        if( $test<0 || $test>11 )
            print "<p>$test is within range</p>";
        else
            print "<p>$test is out of range</p>";
    }
?>
</body>
</html>
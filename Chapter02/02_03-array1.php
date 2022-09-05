<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Arrays</h1>
<?php
    /*
        - the '$scores' array is built manually,
        assigning elements to floating point values
        - all data in the array must be of the same
        type
    */
    $scores[0] = 40.5;
    $scores[1] = 36.1;
    $scores[2] = 25.6;

    print "<h2>Top Scores</h2>";
    print "<ol>";
    for( $x=0; $x<=2; $x++ ) {
        // the array element is referenced in brackets
        print "<li>$scores[$x]</li>";
    }
    print "</ol>";
?>
</body>
</html>
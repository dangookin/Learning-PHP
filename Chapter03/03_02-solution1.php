<html>
<head>
    <title>Chapter 3, Movie 2</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // generate values from 1 through 20
    for( $v=1; $v<21; $v++ ) {
        print "<p>$v is ";
        /*
            - use "mod 3" to test whether the value is
            evenly-divisible by 3
            - the result is zero (FALSE) for values evenly-
            divisible, so the second option is chosen
            - otherwise, the result is either 1 or 2,
            which is TRUE, so the value is "not three"
        */
        $result = $v % 3 ? "not three" : "THREE!";
        print "$result</p>";
    }
?>
</body>
</html>
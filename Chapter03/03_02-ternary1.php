<html>
<head>
    <title>Chapter 3, Movie 2</title>
</head>
<body>
    <h1>Ternary Operator</h1>
<?php
    // scan values from 1 through 20
    for( $v=1; $v<21; $v++ ) {
        print "<p>$v is ";
        /*
            - the ternary operator uses the comparison '$v < 10'
            - when the comparision is TRUE, the first string is returned
            - when the comparison is FALSE, the second string is returned
            - the string returned is stored in variable '$result'
        */
        $result = $v < 10 ? "less than 10" : "greater than or equal to 10";
        print "$result</p>";
    }
?>
</body>
</html>
<html>
<head>
    <title>Chapter 3, Movie 2</title>
</head>
<body>
    <h1>Ternary Operator</h1>
<?php
    // process values 1 through 20
    for( $v=1; $v<21; $v++ ) {
        print "<p>$v is ";
        /*
            - the result of '$v' mod 2 is 1 for odd numbers
            and zero for even numbers
        */
        $result = $v % 2 ? "odd" : "even";
        print "$result</p>";
    }
?>
</body>
</html>
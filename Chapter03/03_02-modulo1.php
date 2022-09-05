<html>
<head>
    <title>Chapter 3, Movie 2</title>
</head>
<body>
    <h1>Modulo Operator</h1>
<?php
    // generate values from 20 down to 1
    for( $v=20; $v>=1; $v-- ) {
        /*
            - calculate the modulo of '$v' and 5, the remainder
            of '$v' divided by 5
        */
        $result =  $v % 5;
        print "<p>$v % 5 = $result</p>";
    }
?>
</body>
</html>
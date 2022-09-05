<html>
<head>
    <title>Chapter 1, Movie 7</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // set the repeat count
    $count = 5;

    while( $count ) {
        /*
            - to alter the last line output, a decision is required.
            - the last line is output when '$count==1'
            - the 'if' statement catches this condition.
            - otherwise, the 'else' statement is output for
            any value of '$count' other than 1
            - because each decision has only one statement, they
            are not enclosed in braces
        */
        if( $count==1 )
            // output only when '$count' is equal to 1
            echo "<p>I've asked you once!</p>";
        else
            echo "<p>I've asked you $count times!</p>";
        // variable $count must still be manipulated to terminate the loop
        $count--;
    }
?>
</body>
</html>
<html>
<head>
    <title>Chapter 1, Movie 7</title>
</head>
<body>
    <h1>Going Loopy</h1>
<?php
    $count = 5;

    while( $count ) {
        /*
            To alter the last line output, a decision is required.
            The last line is output when '$count==1'. The 'if'
            statement below catches this condition. Otherwise,
            the 'else' statement is output for any value of
            $count other than 1
        */
        if( $count==1 )
            echo "<p>I've asked you once!</p>";
        else
            echo "<p>I've asked you $count times!</p>";
        // variable $count must still be manipulated to terminate the loop
        $count--;
    }
?>
</body>
</html>
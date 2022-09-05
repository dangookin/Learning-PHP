<html>
<head>
    <title>Chapter 1, Movie 7</title>
</head>
<body>
    <h1>Going Loopy</h1>
<?php
    // set the loop repeating variable
    $count = 5;

    /*'
        - the loop's statements repeat as long as
        '$count' is greater than zero
    */
    while( $count > 0 ) {
        echo "<p>I've asked you $count times!</p>";
        // modify the loop exit condition
        $count = $count - 1;
    }
?>
</body>
</html>
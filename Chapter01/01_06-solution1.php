<html>
<head>
    <title>Chapter 1, Movie 6</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // set the value of variable $dinners to 35
    $dinners = 35;

    /*
        - you could also set the comparision value
        as a variable too, say '$goal' and use it
        in the output, as I've done.
        - if you set 50 as a literal, that's okay,
        but when using a value in multiple spots
        in the code, I recommend using a variable
        - by setting a variable, you make it easier
        to update the code in the future. instead
        of making multiple changes all over, you
        change just one statement
    */
    $goal = 50;
    echo "<h2>Dinners Served</h2>";
    if( $dinners > $goal ) {
        echo "<p>More than $goal dinners were served today</p>";
    }
    else {
        echo "<p>$goal or fewer dinners were served today</p>";
    }
?>
</body>
</html>
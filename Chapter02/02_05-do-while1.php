<html>
<head>
    <title>Chapter 2, Movie 5</title>
</head>
<body>
    <h1>Do-While Loop</h1>
<?php
    // set the looping variable
    $repeat = 5;

    print "<h2>Countdown!</h2>";
    // this loop executes at least once
    do {
        print "<p>$repeat</p>";
        $repeat--;      // modify the looping condtion
    } while( $repeat>0 );       // loop termination
?>
</body>
</html>
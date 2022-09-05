<html>
<head>
    <title>Chapter 2, Movie 4</title>
</head>
<body>
    <h1>If Else-If Else Decisions</h1>
<?php
    // values to process
    $mood = array ( 4, 0, -5, 2 );

    print "<h2>Mood Indicator</h2>";
    // work through each value
    foreach ($mood as $daily) {
        if( $daily>0 )      // handle values greater than zero
            print "<p>Good mood!</p>";
        else if( $daily<0 ) // handle values less than zero
            print "<p>Bad mood!</p>";
        else                // handle zero
            print "<p>No mood</p>";
    }
?>
</body>
</html>
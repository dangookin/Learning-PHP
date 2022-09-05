<html>
<head>
    <title>Chapter 2, Movie 8</title>
</head>
<body>
    <h1>Exit or Die</h1>
<?php
    // generate a random integer
    $r = rand();

    // if the value is odd, exit (die) the program, otherwise not
    if( $r % 2 ) {
        die("<p>Odd number encountered! I'm done!</p>");
    } else {
        print "<p>Even number. You're safe!</p>";
    }
    print '<p>Code completed successfully</p>';
?>
</body>
</html>
<html>
<head>
    <title>Chapter 4, Movie 3</title>
</head>
<body>
    <h1>Pithy Sayings</h1>
<?php
    // list of pithy sayings
    $wisdom = array(
        "Never miss a good chance to shut up",
        "Snowmen fall from heaven unassembled",
        "Why don't sheep shrink when it rains?",
        "Why doesn't Tarzan have a beard?",
        "Why are there no fat turtles?",
        "Can two people be alone together?"
    );

    // obtain the number of sayings/elements
    $total = count($wisdom);
    // find a random entry, (start with zero, so subtract one from $total)
    $r = rand(0,$total-1);
    // output the saying element
    print "<p>$wisdom[$r]</p>";
?>
</body>
</html>
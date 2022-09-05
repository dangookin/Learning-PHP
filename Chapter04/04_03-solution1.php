<html>
<head>
    <title>Chapter 4, Movie 3</title>
</head>
<body>
    <h1>Challenge Solution</h1>
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

    $total = count($wisdom);
/*
    this loop repeats until the two random values, stored in
    $a and $b do not match. So it repeats as long as they're
    equal. I used a do-while loop as the values of $a and
    $b must be initialized before they can be compared
*/
    do {
        $a = rand(0,$total-1);
        $b = rand(0,$total-1);
    } while( $a == $b );

    // outpu the two different sayings
    print "<p>$wisdom[$a]</p>";
    print "<p>$wisdom[$b]</p>";
?>
</body>
</html>
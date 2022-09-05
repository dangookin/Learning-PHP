<html>
<head>
    <title>Chapter 2, Movie 1</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // variables to hold all the data
    $score1 = 45.7;
    $score2 = 36.13;
    $score3 = 10.19;
    $score4 = 5.01;

    // I just use a print statement here
    print "<p>Here are the top scores</p>";

    // print to start the unnumbered list
    print "<ul>";
    // printf() functions to output the percentage values
    printf("<li>First place: %.2f</li>",$score1);
    printf("<li>Second place: %.2f</li>",$score2);
    printf("<li>Third place: %.2f</li>",$score3);
    printf("<li>Fourth place: %.2f</li>",$score4);
    // print to end the unnumbered list
    print "</ul>";
?>
</body>
</html>
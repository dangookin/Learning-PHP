<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Arrays</h1>
<?php
    $scores[0] = 40.5;
    $scores[1] = 36.1;
    $scores[2] = 25.6;

    print "<h2>Top Scores</h2>";
    print "<ol>";
    /*
        - the 'foreach' loop's parentheses holds three items
        - the first item is the array
        - the second is the word 'as'
        - the third is a variable representing each subsequent
        item in the array
    */
    foreach ($scores as $item)
        print "<li>$item</li>";
    print "</ol>";
?>
</body>
</html>
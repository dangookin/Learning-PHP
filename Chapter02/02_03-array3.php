<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Arrays</h1>
<?php
    /*
        - elements are assigned to index values
        zero through whatever when creating the
        array
        - the first element is always zero
    */
    $scores = array( 40.5, 36.1, 25.6 );

    print "<h2>Top Scores</h2>";
    print "<ol>";
    foreach ($scores as $item)
        print "<li>$item</li>";
    print "</ol>";
?>
</body>
</html>
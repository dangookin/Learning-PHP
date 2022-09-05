<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Arrays</h1>
<?php
    // build an associative array
     $player = array(
        'dealta' => "Simon",
        'biggs' => "Jonah",
        'hufro' => "Jeremiah"
    );

    // the item to search for
    $who = "Simon";
    // the function returns the array key
    $key = array_search($who,$player);

    // outpu the result
    print "<p>The key for '$who' is '$key'</p>";
?>
</body>
</html>
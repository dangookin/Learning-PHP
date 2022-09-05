<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Arrays</h1>
<?php
    $player = array(
        'dealta' => "Simon",
        'biggs' => "Jonah",
        'hufro' => "Jeremiah"
    );

    print "<h2>Player Roster</h2>";
    print "<ol>";
    /*
        - you don't need to use the key names when
        a 'foreach' loop processes the array
        elements
    */
    foreach ($player as $name)
        print "<li>$name</li>";
    print "</ol>";
?>
</body>
</html>
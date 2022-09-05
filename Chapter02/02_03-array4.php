<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Arrays</h1>
<?php
    // assigning associative array elements
    $player['dealta'] = "Simon";
    $player['biggs'] = "Jonah";
    $player['hufro'] = "Jeremiah";

    print "<h2>Player Roster</h2>";
    print "<ol>";
    /*
        - here is how the associative array elements are referenced
        - the element reference is the key name
        - if the output doesn't look correct, enclose the entire
        array-element reference in braces, as is done below
    */
    print "<li>{$player['dealta']}</li>";
    print "<li>{$player['biggs']}</li>";
    print "<li>{$player['hufro']}</li>";
    print "</ol>";
?>
</body>
</html>
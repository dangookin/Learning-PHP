<html>
<head>
    <title>Chapter 4, Movie 2</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    $players = array(
        "Simon", "Jonah", "Jeremiah"
    );
    $characters = array(
        "Dealta", "Biggs", "Hufro"
    );
    $scores = array(
        203, 120, 601
    );
    $table_data = array( $players, $characters, $scores );

    define( "WIDTH", 95);

    print "<table cellpadding='3' border='1'>";
    print "<thead><th>Player</th><th>Character</th><th>Score</th></thead>";
    print "<tbody>";

    for( $row=0; $row<3; $row++ ) {
        print "<tr>";
        for( $col=0; $col<3; $col++ ) {
            // just swap the $row and $col element variables. That's it!
            print '<td width='.WIDTH.'>'.$table_data[$col][$row].'</td>';
        }
        print "<tr>";
    }
    print "</tbody></table>";
?>
</body>
</html>
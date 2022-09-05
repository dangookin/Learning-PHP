<html>
<head>
    <title>Chapter 4, Movie 2</title>
</head>
<body>
    <h1>Table Output</h1>
<?php
/*
    Build a two dimensional array to represent rows and columns
    First build the separate parts:
*/
    $players = array(
        "Simon", "Jonah", "Jeremiah"
    );
    $characters = array(
        "Dealta", "Biggs", "Hufro"
    );
    $scores = array(
        203, 120, 601
    );
    // Combine the three arrays into a single array
    $table_data = array( $players, $characters, $scores );

    // define a constant for the table column width
    define( "WIDTH", 95);     // set cell width constant

    // Output the table
    print "<table cellpadding='3' border='1'>";
    // Header row
    print "<thead><th>Player</th><th>Character</th><th>Score</th></thead>";
    // Table body, three rows of three columns
    print "<tbody>";
/*
    use nested 'for' loops to capture element numbers for the
    the multidemensional array
*/ 
    for( $row=0; $row<3; $row++ ) {
        print "<tr>";
        for( $col=0; $col<3; $col++ ) {
            print '<td width='.WIDTH.'>'.$table_data[$row][$col].'</td>';
        }
        print "</tr>";
    }
    print "</tbody></table>";
?>
</body>
</html>
<html>
<head>
    <title>Chapter 4, Movie 2</title>
</head>
<body>
    <h1>Table Output</h1>
<?php
    define( "WIDTH", 150);

    print "<table cellpadding='3' border='1'>";
    print "<tbody>";
    for( $row=0; $row<3; $row++ ) {
        print "<tr>";
        for( $col=0; $col<3; $col++ ) {
            print '<td width='.WIDTH.'> array='.$row.' element='.$col.'</td>';
        }
        print "<tr>";
    }
    print "</tbody></table>";
?>
</body>
</html>
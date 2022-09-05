<html>
<head>
    <title>Chapter 1, Movie 8</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
/*
    - this solution is only one of many possible
    - you can use 'for' or 'while' loops
    - you can use different variable names
    - the goal is to output the grid, however it works
*/
    $rows = 8;    // set these items as variables to better update them in the future
    $cols = 8;

    // Output the table header
    print "<table><tbody>";

    // I chose a 'for' loop as it's easier to keep track of all the pieces
    for( $r=1; $r<=$rows; $r++ ) {
        // the rows are the outer loop
        print "<tr>";
        for( $c=1; $c<=$cols; $c++ ) {
            // columns are the inner loop; values '$r' and '$c' are output
            print "<td> $r$c </td>";
        }
        print "</tr>";      // terminate the row
    }
    
    // output the table footer
    print "</tbody></table>";
?>
</body>
</html>
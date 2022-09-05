<html>
<head>
    <title>Chapter 2, Movie 6</title>
</head>
<body>
    <h1>Fun with Functions</h1>
<?php
    /*
        - by setting these values as variables, you can
        more effectively adjust the table size
        without having to search-and-replace through
        the code
    */
    $rows = 8;
    $cols = 8;

    // table header
    print '<table border="2"><tbody>';
    for( $r=1; $r<=$rows; $r++ ) {
        // output a row
        print "<tr>";
        for( $c=1; $c<=$cols; $c++ ) {
            // output cells
            $n = rand(1,99);    // return a random value between 1 and 99
            printf("<td> %02d </td>",$n);
        }
        print "</tr>";      // end of the row
    }
    print "</tbody></table>";   // end of the table
?>
</body>
</html>
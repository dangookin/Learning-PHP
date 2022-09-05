<html>
<head>
    <title>Chapter 2, Movie 7</title>
</head>
<body>
    <h1>Chapter Solution 2</h1>
<?php
/*
    - this solution uses an array, specified as the function's
    parameter
    - a 'foreach' loop in the function processes ech of the items
    - this means you can have more than three cells in the row
*/
    function makeTable($items) {
        print "<table border='1'><tbody><tr>";
        foreach ($items as $i) {
            print "<td>$i</td>";
        }
        print "</tr></tbody></table>";
    }

/*
    - here arrays are created to hold the values
    - a multi-dimension array could be used to hold
    all the items, but such a thing hasn't yet been
    introduced in the course.
*/
    $array1 = array( "Alpha", "Bravo", "Charlie" );
    $array2 = array( "Apple", "Banana", "Cantaloupe" );
    $array3 = array( "Angelica", "Bella", "Carlos" );

/*
    - each statement calls the 'makeTable()' function using an
    array as an argument
*/
    makeTable($array1);
    makeTable($array2);
    makeTable($array3);
?>
</body>
</html>
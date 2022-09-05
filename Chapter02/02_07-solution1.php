<html>
<head>
    <title>Chapter 2, Movie 7</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
/*
    - here is a traditional approach, a function with three parameters
     - it contains all the repetative statements to create a table,
    but with placeholders for the arguments passed
     - the function returns no value
*/
    function makeTable($item1, $item2, $item3) {
        print "<table border='1'><tbody><tr>";
        // I use a 'printf()' statement with three %s placeholders for the strings
        printf("<td>%s</td><td>%s</td><td>%s</td",$item1,$item2,$item3);
        print "</tr></tbody></table>";
    }

    // call the function three times, once for each set
    makeTable( "Alpha", "Bravo", "Charlie" );
    makeTable( "Apple", "Banana", "Cantaloupe" );
    makeTable( "Angelica>", "Bella", "Carlos" );
?>
</body>
</html>
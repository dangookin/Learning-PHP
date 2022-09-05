<html>
<head>
    <title>Chapter 3, Movie 1</title>
</head>
<body>
    <h1>Sorting an Array</h1>
<?php
    // an array of strings
    $fruit = array ( "Apple", "Pear", "Banana", "Grape", "Cherry" );

    // sort the array alphabetically
    sort($fruit);

    // output the sorted array
    print "<h2>Fruit</h2><ul>";
    foreach ($fruit as $f)
        print "<li>$f</li>";
    print "</ul>";
?>
</body>
</html>
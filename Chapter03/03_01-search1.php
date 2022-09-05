<html>
<head>
    <title>Chapter 3, Movie 1</title>
</head>
<body>
    <h1>Searching an Array</h1>
<?php
    // setup an array of strings
    $fruit = array ( "Apple", "Pear", "Banana", "Grape", "Cherry" );
    // the target string, the one to find
    $tofind = "Banana";
    // search the array for the target
    $found = array_search($tofind,$fruit);

    // report the results
    printf("<p>'%s' is key %d in the array<p>",$tofind,$found);
    // $found is the element number, the key to the found string
    print "<p>{$fruit[$found]}</p>";
?>
</body>
</html>
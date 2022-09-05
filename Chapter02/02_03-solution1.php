<html>
<head>
    <title>Chapter 2, Movie 3</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // Use the 'array' construct to build the array
    $fruit = array (
        "Apple",
        "Pear",
        "Banana",
        "Grape",
        // no comma after the last line (and yes, you can put a comment here)
        "Cherry"
    );

    print "<h2>Fruit</h2>";
    print "<ul>";       // unnumbered list
    foreach ($fruit as $f)      // variable '$f' represents elements from '$fruit'
        print "<li>$f</li>";    // output the fruit name
    print "</ul>";      // close unnumbered list
?>
</body>
</html>
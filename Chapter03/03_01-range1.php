<html>
<head>
    <title>Chapter 3, Movie 1</title>
</head>
<body>
    <h1>Using 'range()'</h1>
<?php
    // create an array '$ar' holding values 1 through 10
    $ar = range(1,10);

    // output each element value
    foreach( $ar as $r )
        print "<p>$r<p>";
?>
</body>
</html>
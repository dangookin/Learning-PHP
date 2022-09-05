<html>
<head>
    <title>Chapter 1, Movie 8</title>
</head>
<body>
    <h1>Nested Loops</h1>
<?php
    $line = 0;
    while( $line < 11 ) {
        echo "<p>";
        for( $i=0; $i<5; $i++ )
            echo $i;
        echo " This is line $line</p>";
        $line++;
    }
?>
</body>
</html>
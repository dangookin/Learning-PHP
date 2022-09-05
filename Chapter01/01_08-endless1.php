<html>
<head>
    <title>Chapter 1, Movie 8</title>
</head>
<body>
    <h1>Nested Loops</h1>
<?php
    $line = 0;
    while( true ) {
        echo "<p>";
        for( $i=0; $i<$line; $i++ )
            echo "$i";
        echo " This is line $line</p>";
        $line++;
        if( $line > 10 )
            break;
    }
?>
</body>
</html>
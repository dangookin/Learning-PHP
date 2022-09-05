<html>
<head>
    <title>Chapter 1, Movie 6</title>
</head>
<body>
    <h1>Decisions, Decisions</h1>
<?php
    echo "<h2>True/False Test</h2>";
    
    // the php interpreter sees non-zero values as TRUE
    if( 1 ) {
        echo "<p>The value 1 is TRUE</p>";
    }
    else {
        echo "<p>The value 1 is not TRUE</p>";
    }

    // the php interpreter sees zero values as FALSE
    if( 0 ) {
        echo "<p>The value 0 is TRUE</p>";
    }
    else {
        echo "<p>The value 0 is FALSE</p>";
    }
?>
</body>
</html>
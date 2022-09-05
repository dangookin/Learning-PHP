<html>
<head>
    <title>Chapter 2, Movie 7</title>
</head>
<body>
    <h1>Your Own Functions</h1>
<?php
    // call the function 5 times
    for( $x=0; $x<5; $x++ )
        blank();        // function call

    /*
        - function 'blank()'
        - just outputs a line of text
    */
    function blank() {
        print "<p>Blank Line</p>";
    }
?>
</body>
</html>
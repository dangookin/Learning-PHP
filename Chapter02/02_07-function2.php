<html>
<head>
    <title>Chapter 2, Movie 7</title>
</head>
<body>
    <h1>Your Own Functions</h1>
<?php
    /*
        - this function is declared at the top of the block
        - it accepts a single parameter, '$text', representing
        the value passed
        - the parameter is used within the function
    */
    function paragraph($text) {
        print "<p>$text</p>";
    }

    paragraph("I need to output");
    paragraph("Several Lines");
    paragraph("Of Text");
?>
</body>
</html>
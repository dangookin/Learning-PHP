<html>
<head>
    <title>Chapter 2, Movie 1</title>
</head>
<body>
    <h1>'print' construct</h1>
<?php
    $output = "<p>This string is held in a variable</p>";

    // 'print' followed by a string, double quotes then single
    print "<p>This string is inside double quotes</p>";
    print '<p>This string is inside single quotes</p>';

    // 'print' followed by parentheses
    print ("<p>This text is inside parentheses</p>");

    // 'print' followed by a variable name
    print $output;
?>
</body>
</html>
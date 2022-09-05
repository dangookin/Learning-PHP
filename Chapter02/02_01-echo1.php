<html>
<head>
    <title>Chapter 2, Movie 1</title>
</head>
<body>
    <h1>'echo' construct</h1>
<?php
    $output = "<p>This string is held in a variable</p>";

    // 'echo' followed by a string, double quotes then single
    echo "<p>This string is inside double quotes</p>";
    echo '<p>This string is inside single quotes</p>';

    // 'echo' followed by parentheses
    echo ("<p>This text is inside parentheses</p>");

    // 'echo' followed by a variable name
    echo $output;

    // 'echo' followed by multiple arguments, which is something 'print' cannot do
    echo "<ol>","<li>First</li>","<li>Second</li>","<li>Third</li>","<ol>";
?>
</body>
</html>
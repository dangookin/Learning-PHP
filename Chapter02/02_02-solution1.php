<html>
<head>
    <title>Chapter 2, Movie 2</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // variable declarations
    $a = "sandwich";
    $b = 4.95;

    /*
        - double quotes mean you can set the variables inside the string
        - the double quote characters must be escaped
    */
    print "<p>That \"$a\" cost $$b</p>";
    /*
        - single quotes mean you must concatenate the variables within
        you could also output each item individually across multiple
        statements
    */
    print '<p>That "'.$a.'" cost $'.$b.'</p>';
?>
</body>
</html>
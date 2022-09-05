<html>
<head>
    <title>Chapter 2, Movie 1</title>
</head>
<body>
    <h1><em>printf()</em> Function</h1>
<?php
    $v = "variable";
    $name = "Danny";
    $age = 8;
    $price = 1.98;

    // 'printf()' used similar to 'echo' or 'print'
    printf("<p>This formatting string must be inside double quotes</p>");
    printf("<p>Arguments are name optional, $v names are okay</p>");

    // 'printf()' with a single argument
    printf("<p>%s is his name</p>",$name);

    // 'printf()' with a two arguments
    printf("<p>%s is %d years old</p>",$name,$age);

    // 'printf()' decimal formatting
    printf("<p>That cost $%f</p>",$price);

    // variable output width 
    printf("<p>That cost $%.0f</p>",$price);
    printf("<p>That cost $%.1f</p>",$price);
    printf("<p>That cost $%.2f</p>",$price);
    printf("<p>That cost $%.3f</p>",$price);
    printf("<p>That cost $%.4f</p>",$price);
?>
</body>
</html>
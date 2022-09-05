<html>
<head>
    <title>Chapter 2, Movie 5</title>
</head>
<body>
    <h1>Switch-Case Example</h1>
<?php
    $choice = "A";

    switch( $choice ) {
        case "A":
        case "a":
            print "<p>Thank you for selecting 'A'</p>";
            break;
        case "B":
        case "b":
            print "<p>Thank you for selecting 'B'</p>";
            break;
        case "C":
        case "c":
            print "<p>Thank you for selecting 'C'</p>";
            break;
        default:
            print "<p>Inavlid selection</p>";
    }
?>
</body>
</html>
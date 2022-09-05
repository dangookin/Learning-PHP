<html>
<head>
    <title>Chapter 2, Movie 5</title>
</head>
<body>
    <h1>Switch-Case Example</h1>
<?php
    $choice = 2;

    switch( $choice ) {
        case 1:
            print "<p>Thank you for selecting '1'</p>";
            break;
        case 2:
            print "<p>Thank you for selecting '2'</p>";
            break;
        case 3:
            print "<p>Thank you for selecting '3'</p>";
            break;
        default:
            print "<p>Inavlid selection</p>";
    }
?>
</body>
</html>
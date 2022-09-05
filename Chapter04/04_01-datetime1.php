<html>
<head>
    <title>Chapter 4, Movie 1</title>
</head>
<body>
    <h1>Date Stuff</h1>
<?php
    /*
        - the 'date()' function returns a string
        - l (little L) day of the week, full name
        - F full month name
        - j day of the month, no leading zero
        - Y four-digit year
    */
    $today = date("l, F j, Y");
    print "<p>Good day! It's $today</p>";
?>
</body>
</html>
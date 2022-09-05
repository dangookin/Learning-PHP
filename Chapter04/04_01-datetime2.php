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
        - G 24 hour
        - i (little I) minutes, leading zero
    */
        $now = date("l, F j, Y @ G:i");
    print "<p>Good day! It's $now</p>";
?>
</body>
</html>
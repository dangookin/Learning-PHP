<html>
<head>
    <title>Chapter 4, Movie 1</title>
</head>
<body>
    <h1>Date Stuff</h1>
<?php
    /*
        - set the code's time zone
        - refer to the online manual for valid parameter strings
    */
    date_default_timezone_set("America/Los_Angeles");
    $now = date("l, F j, Y @ G:i");
    print "<p>Good day! It's $now</p>";
?>
</body>
</html>
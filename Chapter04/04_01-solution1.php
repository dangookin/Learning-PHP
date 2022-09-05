<html>
<head>
    <title>Chapter 4, Movie 1</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // optionally set the time zone
    date_default_timezone_set("America/Los_Angeles");

    // the format should be year-mon (two digit)-day (two digit)-weekday (three letter)
    $now = date("Y-m-d-D");
    print "<p>Good day! It's $now</p>";
?>
</body>
</html>
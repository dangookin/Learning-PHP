<html>
<head>
    <title>Chapter 5, Movie 2</title>
</head>
<body>
    <h1>Your Ice Cream Choice</h1>
<?php
    // obtain the match for the 'flavor' radio button
    if( $_GET) {
        $flavor = $_GET['flavor'];
        print "<p>Your favorite ice cream flavor is $flavor</p>";
    } else {
        print "<p>Form data not submitted</p>";
    }
?>
</body>
</html>
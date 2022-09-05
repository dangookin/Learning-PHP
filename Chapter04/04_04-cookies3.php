<?php
    // check the current value of 'last_visit'
    $last_visit = $_COOKIE['last_visit'];
    // if it's not yet set, set it
    if( $last_visit==NULL )
        $last_visit = "Never";

    // update the value, first set the date for a year from now
    $year = 60*60*24*365;
    // create the current date string
    $visit = date("l, F j, Y @ G:i");
    // set the cookie
    setcookie( "last_visit", $visit, time()+$year );
?>
<html>
<head>
    <title>Chapter 4, Movie 4</title>
</head>
<body>
    <h1>Cookies!</h1>
<?php
    // inform the visitor
    urldecode($last_visit);     // replace + with ' ' in the string
    print "<p>You last visited this site $last_visit</p>";
?>
</body>
</html>
<?php
    $visits = $_COOKIE['visits'];
    if( $visits==NULL )
        $visits = 0;
    $year = 60*60*24*365;
    setcookie( "visits", $visits+1, time()+$year );
?>
<html>
<head>
    <title>Chapter 4, Movie 4</title>
</head>
<body>
    <h1>Cookies!</h1>
<?php
    print "<p>You have visited this site $visits times before</p>";
?>
</body>
</html>
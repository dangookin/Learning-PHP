<?php
    /*
        - this function must appear way up here, at the
        top of your code
        - the cookie name is 'type'
        - the cookie contents are the string 'chocolate chip'
        - the cookie expires one hour from now: 'time()' obtains
        the current UNIX epoch time, plus 60 seconds times 60
        minutes
    */
    setcookie( "type", "chocolate chip", time()+60*60 );
?>
<html>
<head>
    <title>Chapter 4, Movie 4</title>
</head>
<body>
    <h1>Cookies!</h1>
    <p>The 'type' cookie has been set</p>
</body>
</html>
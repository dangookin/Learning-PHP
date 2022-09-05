<html>
<head>
    <title>Chapter 5, Movie 4</title>
</head>
<body>
    <h1>Passwords</h1>
<?php
    $user = $_POST['username'];
    // the password is not encrypted
    $password = $_POST['password'];

    /*
        - in a "real" situation you would compare
        the user with the password stored in an
        encrypted manner
    */
    if( $password == "secret" ) {
        print "<p>Welcome, $user!</p>";
    } else {
        print "<p>That is an invalid password!</p>";
    }
?>
</body>
</html>
<html>
<head>
    <title>Chapter 5, Movie 4</title>
</head>
<body>
    <h1>Passwords</h1>
<?php
/*
    remember to update the HTML file to reflect this file
    as the 'action' target
*/
    $user = $_POST['username'];
    $password = $_POST['password'];
    // add the password data stored in the other file
    include "05_04-udata.php";

    // the rest of the code is the same
    if( $password == $userdb[$user] ) {
        print "<p>Welcome, $user!</p>";
    } else {
        print "<p>That is an invalid password!</p>";
    }
?>
</body>
</html>
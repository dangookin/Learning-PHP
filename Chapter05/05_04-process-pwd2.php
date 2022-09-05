<html>
<head>
    <title>Chapter 5, Movie 4</title>
</head>
<body>
    <h1>Passwords</h1>
<?php
    // yes, nothing is encrypted
    $user = $_POST['username'];
    $password = $_POST['password'];
    $userdb = array (
        "Bob" => "secret",
        "Danny" => "please"
    );

    if( $password == $userdb[$user] ) {
        print "<p>Welcome, $user!</p>";
    } else {
        print "<p>That is an invalid password!</p>";
    }
?>
</body>
</html>
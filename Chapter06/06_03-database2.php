<html>
<head>
    <title>Chapter 6, Movie 3</title>
</head>
<body>
<?php
    // fetch the important stuff
    require "06-database-data.php";

    print "<h1>Database Stuff</h1>";
    // open the database
    try {
        $db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
        print "<p>Database opened</p>";
    } catch(PDOException $e ) {
        print "<p> Error ".$e->getMessage()."</p>";
        die();
    }

    // close the database by destroying the object
    $db = NULL;
    print "<p>Database closed</p>";
?>
</body>
</html>

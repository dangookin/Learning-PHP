<html>
<head>
    <title>Chapter 6, Movie 3</title>
</head>
<body>
<?php
/*
	= these variables must be replaced with those specific to
	your database and account
    - the hostname is usually 'localhost'
	- the username and password are what you use for access to
	the system
    - he database name is specific to a database on the
    MySQL/MariaDB server
    - replace these strings as necessary to obtain access
    and run the PHP code
*/
    $db_hostname = "localhost";
    $db_user = "your_username";
    $db_password = "your_password";
    $db_database = "database_name";

    print "<h1>Database Stuff - OOP</h1>";
    // open the database
    try {
        $dbo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
        print "<p>Database opened</p>";
    } catch(PDOException $e ) {
        print "<p> Error ".$e->getMessage()."</p>";
        die();
    }

    // close the database by destroying the object
    $dbo = NULL;
    print "<p>Database closed</p>";
?>
</body>
</html>
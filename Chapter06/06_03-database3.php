<html>
<head>
    <title>Chapter 6, Movie 2</title>
</head>
<body>
<?php
	// fetch the important stuff
	require "06-database-data.php";

    print "<h1>Database Stuff - Procedural</h1>";
	// open the database
    $db = mysqli_connect($db_hostname,$db_user,$db_password,$db_database);
    if( !$db ) {
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    } else {
		print "<p>Database opened</p>";
    }
	// close the database
    mysqli_close($db);
    print "<p>Database closed</p>";
?>
</body>
</html>

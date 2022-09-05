<html>
<head>
    <title>Chapter 6, Movie 4</title>
</head>
<body>
<?php
	// fetch the important stuff
	require "06-database-data.php";

	// new record details
	$user = "Ryan";
	$system = "IBM PC";

	// build the query string
	$query_string = "INSERT INTO `users` ( `id`, `name`, `system` ) "
   		. "VALUES ( NULL, '$user', '$system' )";

    print "<h1>Adding Database Record - Procedural</h1>";
	// open the database
    $db = mysqli_connect($db_hostname,$db_user,$db_password,$db_database);
    if( !$db ) {
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    } else {
		print "<p>Database opened</p>";
    }

	// submit query
	$result = mysqli_query($db,$query_string);
	if( !$result ) {
		die("<p>Invalid query: ".mysqli_error($db)."</p>");
		print "<p>Error with: $query_string</p>";
	} else {
		print "<p>Added user '$user' system '$system' to the database</p>";
	}

	// close the database
    mysqli_close($db);
?>
</body>
</html>

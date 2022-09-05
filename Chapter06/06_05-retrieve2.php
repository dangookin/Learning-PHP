<html>
<head>
    <title>Chapter 6, Movie 5</title>
</head>
<body>
<?php
	// fetch the important stuff
	require "06-database-data.php";

	// build the query string
	$query_string = "SELECT `name` FROM `users` WHERE `system` LIKE 'Apple II'";

	print "<h1>Showing Apple II Users</h1>";
	// open the database
	try {
		$db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
	} catch(PDOException $e ) {
		print "<p>Error retrieving records</p>";
		die();
	}

	// submit query
	$result = $db->prepare($query_string);
	$result->execute();

	// process each row returned
	while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
		// the row element names are the same as fields/columns
		print "<p>$row[name]</p>";
	}

	// database closes automatically here
?>
</body>
</html>

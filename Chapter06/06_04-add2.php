<html>
<head>
    <title>Chapter 6, Movie 4</title>
</head>
<body>
<?php
	// fetch the important stuff
	require "06-database-data.php";

	// new record details
	$user = "Morgan";
	$system = "Apple II";

	// build the query string
	$query_string = "INSERT INTO `users` ( `id`, `name`, `system` ) "
		. "VALUES ( NULL, '$user', '$system' )";

	print "<h1>Adding Database Record</h1>";
	// open the database
	try {
		$db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
	} catch(PDOException $e ) {
		print "<p> Error ".$e->getMessage()."</p>";
		die();
	}

	// submit query
	$statement = $db->prepare($query_string);
	if( $statement ) {
		$statement->execute();
		print "<p>Added user '$user' system '$system' to the database</p>";
	} else {
		print "<p>Error with: $query_string</p>";
	}

	// database closes automatically here
?>
</body>
</html>

<html>
<head>
    <title>Chapter 6, Movie 4</title>
</head>
<body>
<?php
	// if nothing has yet been submitted
	if( !$_GET ) {
	/*
		- set this file as the form's action
		- i'm using the 'get' method
	*/
		print <<<TEXTBLOCK
			<h1>Add a New User</h1>
			<form method="get" action="06_04-solution1.php">
				<p>User: <input type="text" name="user" /></p>
				<p>System: <input type="text" name="system" /></p>
				<p><input type="submit" /></p>
			</form>
TEXTBLOCK;
	} else {
		// fetch the important stuff
		require "06-database-data.php";

		// new record details fetched from $_GET superglobal
		$user = $_GET['user'];
		$system = $_GET['system'];

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
	}
?>
</body>
</html>

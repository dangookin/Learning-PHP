<html>
<head>
    <title>Chapter 6, Movie 5</title>
</head>
<body>
<?php
	// fetch the important stuff - required for both branches
	require "06-database-data.php";

	// open the database - required for both branches
	try {
		$db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
	} catch(PDOException $e ) {
		print "<p> Error ".$e->getMessage()."</p>";
		die();
	}

	if( !$_GET ) {
		/*
			- first branch processes the form
			- use the 'system' column in the database to
			build a menu
			- use the 'DISTINCT' qualifier in the query
			string to obtain whatever systems have been
			submitted
		*/
		$query_string = "SELECT DISTINCT `system` FROM `users`";

		print "<h1>Who Uses Which System?</h1>";

		// submit query
		$result = $db->prepare($query_string);
		$result->execute();

		/*
		   - generate the self-referencing form
		   - remember to update the action to reflect this
		   script's filename
		*/
		print "<form method=\"get\" action=\"06_05-solution1.php\">";
		print "<p>Choose system: <select name=\"system\">";
		print "<option selected value=\"\">System</option>";
		// process each row returned, setting the results in a menu
		while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
			print "<option>$row[system]</option>";
		}
		print "</select></p>";
		print "<p><input type=\"submit\" />";

	} else {
		/*
			- this branch uses the 'system' value to select
			only those names in the database that match the
			system column
			- then output them in an ordinal list
		*/
		// build the query string
		$query_string = "SELECT `name` FROM `users` WHERE `system` LIKE '$_GET[system]'";

		// specifically inform the user
		print "<h1>Showing $_GET[system] Users</h1>";

		// submit query (the database is already open)
		$result = $db->prepare($query_string);
		$result->execute();

		// process each row returned as an ordinal list
		print "<ol>";
		while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
			// the row element names are the same as fields/columns
			print "<li>$row[name]</li>";
		}
		print "</ol>";

		// database closes automatically here
	}
?>
</body>
</html>

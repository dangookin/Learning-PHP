<html>
<head>
    <title>Chapter 6, Movie 6</title>
</head>
<body>
<?php
	// the important stuff
	require "06-database-data.php";
	$thisfile = $_SERVER['PHP_SELF'];

	try {
		$db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
	} catch(PDOException $e ) {
		print "<p> Error ".$e->getMessage()."</p>";
		die();
	}

	// show the form
	if( !$_GET ) {
		// build the query string, dump the entire table
		$query_string = "SELECT * FROM `users`";

		print "<h1>Purge Database Records</h1>";
		// submit query
		$result = $db->prepare($query_string);
		$result->execute();

		/*
		   - set the form
		   - process each row in a table, along with a checkbox
		   lotsa text output here, so I'm using heredocs
		   - remember that heredocs can contain variables,
		   as shown in PART2
		   - by the way, you probably NEVER want to use the
		   'get' method when working with SQL; use 'post'
		   instead
		*/
		print <<<PART1
		<form method="get" action="$thisfile">
		<table border=2 cellpadding=3>
		<thead><tr><th>Delete?</th><th>ID</th><th>Name</td><th>System</th></tr></thead>
		<tbody>
PART1;
		while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
			print <<<PART2
			<tr><td align="center">
			<input type="checkbox" name="todelete[]" value="$row[id]"></td>
			<td>$row[id]</td><td>$row[name]</td><td>$row[system]</td></tr>
PART2;
		}
		print <<<PART3
		</tbody>
		</table>
		<p><input type="submit" /></p>
		</form>
PART3;
	} else {
		// process the form

		// count the number of rows in the superglobal
		$todelete = $_GET['todelete'];
		printf("<h1>Removing %d Users</h1>",count($todelete) );
	}

?>
</body>
</html>

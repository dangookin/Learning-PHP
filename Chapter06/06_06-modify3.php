<html>
<head>
    <title>Chapter 6, Movie 6</title>
</head>
<body>
<?php
	// the important stuff
	require "06-database-data.php";
	$thisfile = $_SERVER['PHP_SELF'];

	// open the database
	try {
		$db = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_user, $db_password );
	} catch(PDOException $e ) {
		print "<p> Error ".$e->getMessage()."</p>";
		die();
	}

	if( !$_GET ) {
		// nothing input yet, so show the form
		// build the query string, dump the entire table
		$query_string = "SELECT * FROM `users`";

		// submit query
		$result = $db->prepare($query_string);
		$result->execute();

		/*
		   - set the form
		   - process each row in a table coupled with a
		   radio button
		   - heredocs to output form text and variables
		   - by the way, you probably NEVER want to use the
		   'get' method when working with SQL; use 'post'
		   instead
		*/
		print <<<PART1
		<h1>Modify Database Records</h1>
		<form method="get" action="$thisfile">
		<table border=2 cellpadding=3>
		<thead><tr><th>Select</th><th>ID</th><th>Name</td><th>System</th></tr></thead>
		<tbody>
PART1;
		while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
			print <<<PART2
			<tr><td align="center">
			<input type="radio" name="modify" value="$row[id]"></td>
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
		if( !$_GET['change'] ) {
			// process the form - present the record to be modified

			$query_string = "SELECT * FROM `users` WHERE `id` LIKE '$_GET[modify]'";
			$result = $db->prepare($query_string);
			$result->execute();
			$row = $result->fetch(PDO::FETCH_ASSOC);

			print "<h1>Modifying Record $row[id]</h1>";
			print <<<PART4
			<form method="get" action="$thisfile">
			<p>User name: <input type="text" name="name" value="$row[name]" /></p>
			<p>System: <input type="text" name="system" value="$row[system]" /></p>
			<input type="hidden" name="change" value="TRUE" />
			<input type="hidden" name="id" value="$row[id]" />
			<p><input type="submit" /></p>
			</form>
PART4;
		} else {
			// update the database
			print "<h1>Updating Record $_GET[id]</h1>";
			
			// build query string
			$query_string = "UPDATE `users` "
				. "SET `name` = '$_GET[name]', "
				. "`system` = '$_GET[system]' "
				. "WHERE `users`.`id` = $_GET[id]"; 

			// perform the deed
			$result = $db->prepare($query_string);
			$result->execute();
			print <<<PART5
			<p>Done!</p>
			<p><a href="$thisfile">Review</a></p>
PART5;
		}
	}

	// database closes automatically here
?>
</body>
</html>

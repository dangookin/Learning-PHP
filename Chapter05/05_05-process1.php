<html>
<head>
    <title>Chapter 5, Movie 5</title>
</head>
<body>
<?php
    // read data from the form - if available
    if( $_POST ) {
        print "<h1>Database Update</h1>";
        $username = $_POST['user'];
        $system = $_POST['system'];
        // confirm that items were chosen
        if( $username=="" || $system=="" ) {
            print "<p>Missing data</p>";
        } else {
            print "<p>$username users a $system computer</p>";
            print "<p>Database updated</p>";
        }
    } else {
        print "<p>Invalid form data</p>";
    }
?>
</body>
</html>
<html>
<head>
    <title>Chapter 5, Movie 5</title>
</head>
<body>
<?php
    if( $_POST ) {
        print "<h1>Database Update</h1>";
        $username = $_POST['user'];
        $system = $_POST['system'];
        if( $username=="" || $system=="" ) {
            print "<p>Missing data</p>";
        } else {
            print "<p>$username users a $system computer</p>";
            print "<p>Database updated</p>";
        }
    } else {
        print <<<EOT
        <h1>Add Database Entry</h1>
        <form method="post" action="05_05-form-proc1.php" >
            <p>User Name: <input type="text" name="user" />
                <select name="system">
                    <option selected value="">Computer System</option>
                    <option>Apple II</option>
                    <option>Commodore 64</option>
                    <option>IBM PC</option>
                    <option>Macintosh</option>
                    <option>Sinclair</option>
                    <option>TRS-80</option>
                    <option>Other</option>
                </select>
            </p>
            <p>
                <input type="submit" />
            </p>
        </form>
EOT;
    }
?>
</body>
</html>
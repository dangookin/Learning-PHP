<html>
<head>
    <title>Chapter 5, Movie 6</title>
</head>
<body>
<?php
    if( $_POST ) {
        $story = $_POST['lifestory'];
        print "<h1>Your Life Story</h1>";
        print strip_tags($story);
    } else {
        print <<<EOT
    <h1>Tell me your life story</h1>
    <form method="post" action="05_06-form2.php" >
        <p><textarea rows="4" cols="64" name="lifestory" ></textarea></p>
        <p><input type="submit" /></p>
    </form>
EOT;
    }
?>
</body>
</html>
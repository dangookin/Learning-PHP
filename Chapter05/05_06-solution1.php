<html>
<head>
    <title>Chapter 5, Movie 6</title>
</head>
<body>
<?php
    if( $_POST ) {
        $story = $_POST['lifestory'];
        print "<h1>Your Life Story</h1>";
        /*
            - allow the current tags for italic <em> and bold <strong>
            but also the deprecated tags <b> and <i>
            - no need to set the closing tags
        */
        print strip_tags($story,"<b><i><em><strong>");
    } else {
        // don't forget to set this file as the form's action
        print <<<EOT
    <h1>Tell me your life story</h1>
    <form method="post" action="05_06-solution1.php" >
        <p><textarea rows="4" cols="64" name="lifestory" ></textarea></p>
        <p><input type="submit" /></p>
    </form>
EOT;
    }
?>
</body>
</html>
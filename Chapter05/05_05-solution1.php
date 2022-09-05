<html>
<head>
    <title>Chapter 5, Movie 5</title>
</head>
<body>
<?php
/*
    you don't need to test for an empty submission as this if
    test does so for you automatically: Clicking 'submit' without
    choosing an option just re-displays the form
*/
    if( $_GET) {
        $flavor = $_GET['flavor'];
        print "<h1>Your Ice Cream Choice</h1>";
        print "<p>Your favorite ice cream flavor is $flavor</p>";
    } else {
    /*
        don't forget to update the action to reference this document!
        the hereto endblock marker ('EOT' here) must be in the first column
        on a line by itself, as shown below at Line 33
    */
    print <<<EOT
        <h1>Radio Buttons</h1>
        <form method="get" action="05_05-solution1.php">
            <p>What is your favorite ice cream flavor?</p>
            <p><input type="radio" name="flavor" value="vanilla" /> Vanilla</p>
            <p><input type="radio" name="flavor" value="chocolate" /> Chocolate</p>
            <p><input type="radio" name="flavor" value="strawberry" /> Strawberry</p>
            <p><input type="radio" name="flavor" value="rocky road" /> Rocky Road</p>
            <p><input type="radio" name="flavor" value="prefer not to say" /> Prefer not to say</p>
            <p><input type="submit" /></p>
        </form>
EOT;
    }
?>
</body>
</html>
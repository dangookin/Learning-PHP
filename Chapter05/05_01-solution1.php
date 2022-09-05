<html>
<head>
    <title>Chapter 5, Movie 1</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
/*
    this solution is a copy-and-paste of the example shown in the'
    movie. Replace $_POST with $_GET as well as the field names.
    I hope you remembered to specify the proper PHP file as
    the action in the form tag!
*/
    if( $_GET) {
        $name = $_GET['name'];
        $age = $_GET['age'];
        print "<p>Hello, $name. You are $age years old.</p>";
    } else {
        print "<p>Form data not submitted</p>";
    }
?>
</body>
</html>
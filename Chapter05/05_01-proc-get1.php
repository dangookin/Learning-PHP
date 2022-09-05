<html>
<head>
    <title>Chapter 5, Movie 1</title>
</head>
<body>
    <h1>Process Form Get</h1>
<?php
    /*
        - the 'get' method's parameters are received in
        the $_GET superglobal
        - the form element's 'name' value is the array
        key name
        - the contents are the value submitted by the form
    */
    $first = $_GET['first'];
    $last = $_GET['last'];
    print "<p>Hello, $first $last!</p>";
?>
</body>
</html>
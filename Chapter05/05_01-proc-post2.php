<html>
<head>
    <title>Chapter 5, Movie 1</title>
</head>
<body>
    <h1>Process Form Post</h1>
<?php
    /*
        - if the '$_POST' or '$_GET' array is empty, it
        returns 'false' as its value, so this text can
        be used to determine if the data is submitted
        - remember to update the HTML form so that this
        file is the target
    */
    if( $_POST) {
        $first = $_POST['first'];
        $last = $_POST['last'];
        print "<p>Hello, $first $last!</p>";
    } else {
        print "<p>Form data not submitted</p>";
    }
?>
</body>
</html>
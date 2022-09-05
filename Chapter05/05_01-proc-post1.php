<html>
<head>
    <title>Chapter 5, Movie 1</title>
</head>
<body>
    <h1>Process Form Post</h1>
<?php
     /*
        - 'post' works like 'get' but the data sent doesn't
        appear on the address bar
    */
    $first = $_POST['first'];
    $last = $_POST['last'];
    print "<p>Hello, $first $last!</p>";
?>
</body>
</html>
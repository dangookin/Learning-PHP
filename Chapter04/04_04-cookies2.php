<head>
    <title>Chapter 4, Movie 4</title>
</head>
<body>
    <h1>Cookies!</h1>
<?php
    /*
        - read the 'type' cookie saved for this site
        - cookies are related to sites not specific pages
    */
    $snack = $_COOKIE['type'];
    print "<p>This website's cookie type is '$snack'</p>";
?>
</body>
</html>
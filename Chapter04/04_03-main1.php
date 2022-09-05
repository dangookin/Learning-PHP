<html>
<head>
    <title>Chapter 4, Movie 3</title>
</head>
<body>
    <h1>Pithy Sayings</h1>

    <p>Here is today's wisdom:<em>
<?php
/* 
    ensure that this file is in the same directory as the referenced
    php file, or that a full or relative pathname is specified
*/
    include "04_03-wisdom2.php";
/*
    yes, the one statement is all that's needed; the php file
    outputs the saying, but the open HTML tags must be closed
*/
?>
</em></p>
</body>
</html>
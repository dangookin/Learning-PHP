<html>
<head>
    <title>Chapter 3, Movie 3</title>
</head>
<body>
    <h1>Challenge</h1>
<?php
    $uc = range("A","Z");
    $lc = range('a','z');

    print '<h2>The Alphabet</h2>';
    print '<p>Uppercase: ';
    foreach( $uc as $l )
        print "$l&nbsp";
    print '</p><p>Lowercase: ';
    foreach( $lc as $l )
        print "$l&nbsp";
    print '</p>';
?>
</body>
</html>
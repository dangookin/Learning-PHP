<html>
<head>
    <title>Chapter 3, Movie 1</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    // generate the uppercase letter array
    $uc = range("A","Z");
    // generate the lowercase letter array
    $lc = range('a','z');

    // Web page output
    print '<h2>The Alphabet</h2>';
    print '<p>Uppercase: ';
    // loop through each uppercase letter
    foreach( $uc as $l )
        print "$l&nbsp";    // output the letter and a space
    print '</p><p>Lowercase: ';
    // loop through each lowercase letter
    foreach( $lc as $l )
        print "$l&nbsp";    // output the letter and a space
    print '</p>';
?>
</body>
</html>
<html>
<head>
    <title>Chapter 3, Movie 3</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
/*
    there is no right or wrong way to split up the code
    Accept my solution here as a suggestion
    Some HTML editors may balk at splitting the tags on
    Lines 18 and 23. The output still works.
*/
    $uc = range("A","Z");
    $lc = range('a','z');
?>
    <h2>The Alphabet</h2>
    <p>Uppercase
<?php
    foreach( $uc as $l )
        print "$l&nbsp";
?>
    </p><p>Lowercase: 
<?php
    foreach( $lc as $l )
        print "$l&nbsp";
?>
    </p>
</body>
</html>
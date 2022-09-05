<html>
<head>
    <title>Chapter 3, Movie 1</title>
</head>
<body>
    <h1>Counting</h1>
<?php
    // create an array of all uppercase letters
    $alphabet = range("A","Z");

    // return the number of elements in the array
    $letters = count($alphabet);

    // output the results
    print '<p>';
    printf("There are %d letters in the alphabet:",$letters);
    print '</p><p>';
    foreach( $alphabet as $l )
        print "$l&nbsp";
    print '</p>';
?>
</body>
</html>
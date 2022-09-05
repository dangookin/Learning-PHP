<html>
<head>
    <title>Chapter 2, Movie 7</title>
</head>
<body>
    <h1>Your Own Functions</h1>
<?php
    /*
        - this function accepts two parameters
        - it returns the value stored in variable 'sum'
    */
    function addition($a,$b) {
        $sum = $a + $b;
        return($sum);       // return a value
    }

    /*
        - function 'addition()' is called here
        - it requires two arguments
        - the function returns a value, which is
        stored in variable '$t'
    */
    $t = addition(5,4);
    print "<p>The sum of 5 and 4 is $t</p>";
?>
</body>
</html>
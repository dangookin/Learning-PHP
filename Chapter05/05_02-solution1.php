<html>
<head>
    <title>Chapter 5, Movie 2</title>
</head>
<body>
    <h1>Challenge Solution</h1>
    <h2>Toppings For Your Burger</h2>
    <p>You want: 
<?php
    if( $_GET) {
        $toppings = $_GET['toppings'];
        // obtain the total number of inputs
        $c = count($toppings);
        // use $x as a looping variable
        $x = 0;
        // loop from zero (the first item) to the next-to-last
        while( $x<$c-1 ) {
            print "$toppings[$x] + ";   // append the + sign
            $x++;     // don't forget to increment the exit condition!
        }
        // output the final item, which is now the value of $x
        print "$toppings[$x]";      // no + sign added
    } else {
        print "nothing";
    }
?>
    </p>
</body>
</html>
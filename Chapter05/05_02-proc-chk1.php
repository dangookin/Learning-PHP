<html>
<head>
    <title>Chapter 5, Movie 2</title>
</head>
<body>
    <h1>Toppings For Your Burger</h1>
    <p>You want: 
<?php
    if( $_GET) {
        // $toppings is an associative array
        $toppings = $_GET['toppings'];
        foreach( $toppings as $t)
            print "$t ";
    } else {
        print "nothing";
    }
?>
    </p>
</body>
</html>
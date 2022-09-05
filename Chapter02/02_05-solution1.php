<html>
<head>
    <title>Chapter 2, Movie 5</title>
</head>
<body>
    <h1>Challenge Solution</h1>
    <h2>Daily Activity</h2>
<?php
    $activity = array( 1, 3, 2, 1, 4, 5, 1, 4 );

    foreach( $activity as $c ) {
        /*
            - the switch value is '$c', representing each subsequent element
            in array $acivity
        */
        switch( $c ) {
            case 1:
                print "<p>You went to school</p>";
                break;      // remember to break to deal with the fall-through
            case 2:
                print "<p>You went to the store</p>";
                break;
            case 3:
                print "<p>You went to the park</p>";
                break;
            case 4:
                print "<p>You went home</p>";
                break;
            default:
                /*
                    - the value '5' isn't specified, so it just falls through
                    to the 'default' condition, meaning you did nothing
                */
                print "<p>You did nothing</p>";
                /*
                    - no 'break' is needed in the 'default' block as the
                    switch-case structure is finished here
                    - The 'foreach' loop continues to process the array
                    until the final element
                */
        }
    }
?>
</body>
</html>
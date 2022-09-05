<html>
<head>
    <title>Chapter 3, Movie 6</title>
</head>
<body>
    <h1>Object Oriented PHP</h1>
<?php
    // declare a class
    class kitty {
        public $name = '';      // set visibility to 'public' for full access
    }

    // create an object
    $cat1 = new kitty;
    
    /*
        - set a property
        - the '->' operator references a property within an object
    */
    $cat1->name = "Morton";

    /*
        - to access the object, the '->' operator is used
        - the variable is enclosed in braces to ensure
        that the entire thing is seen as a variable
    */
    print "<p>My kitty is named {$cat1->name}</p>";
?>
</body>
</html>
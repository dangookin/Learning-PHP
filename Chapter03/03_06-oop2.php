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

        // this method belongs to the 'kitty' class
        function says() {
            return "Meow";
        }
    }

    // create an object
    $cat1 = new kitty;
    
    // set a property
    $cat1->name = "Morton";

    // access the object
    print "<p>My kitty is named {$cat1->name}</p>";
    print "<p>He says \"{$cat1->says()}\"</p>";
?>
</body>
</html>
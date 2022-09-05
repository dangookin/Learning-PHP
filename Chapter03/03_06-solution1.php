<html>
<head>
    <title>Chapter 3, Movie 6</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    /*
        - most of this code is copied from 03_06-oop2.php
        - changes are noted in the code
    */
    class kitty {
        public $name = '';      
        public $age = 0;       // initialize the age to zero

        function says() {
            return "Meow";
        }

    /*
        - the new method
        -  it accepts no arguments because the 'age' property
        is already part of this class
        - '$this' refers to the current object's property
        (age in this instance)
        - per the internet, one cat year is equal to eight
        human years
    */
        function humanYears() {
            return ($this->age * 8 );       // I did this as a single statement
        }
    }

    // create an object
    $cat = new kitty;
    
    // set a property
    $cat->name = "Morton";
    $cat->age = 14;      // remember to set this value!

    // access the object
    print "<p>My kitty is named {$cat->name}</p>";
    print "<p>He says \"{$cat->says()}\"</p>";
    /*
        - new output below
        - first the cat's age, using both the 'name' and 'age' properties
        - then comes the 'huamnYears()' method
    */
    print "<p>{$cat->name} is {$cat->age} years old</p>";
    print "<p>That's {$cat->humanYears()} in human years!</p>";
?>
</body>
</html>
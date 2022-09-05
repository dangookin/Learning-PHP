<html>
<head>
    <title>Chapter 5, Movie 2</title>
</head>
<body>
    <h1>Computer Survey</h1>
<?php
    if( $_GET) {
        // obtain the value from the 'os' radio button group
        $os = $_GET['os'];
        print "<p>Your favorite operating system is $os</p>";
        /*
            - obtain the value from the 'nerd' radio button group
            - this value is either '1' for 'yes' or '0' for 'no'
            - the 'if' condition is either 'true' or 'false' based
            on the element's value
        */
        if( $_GET['nerd']) {
            printf("<p>You consider yourself a nerd</p>");
        } else {
            printf("<p>You <em>do not</em> consider yourself a nerd</p>");
        }
    } else {
        print "<p>Form data not submitted</p>";
    }
?>
</body>
</html>
<html>
<head>
    <title>Chapter 3, Movie 4</title>
</head>
<body>
    <h1>Challenge Solution</h1>
<?php
    /*
        - the string you want is the HTTP_USER_AGENT
        - to avoid having too much text in the rest
        of the code, I assign its value to variable '$ua' here
    */
    $ua = $_SERVER[HTTP_USER_AGENT];

    /*
        - the strstr() function works like this:
            strstr( string-to-search, string-to-find );
        - in the docs, they use "haystack" and "needle" as examples
        - if the string is found, its match is returned, otherwise
        the function returns FALSE
        - in these examples, if the string isn't found, FALSE
        is returned and execution falls through to the next decision
    */
    if( strstr( $ua, "Windows" ))
        print "<p>Greetings Windows user!</p>";
    else if( strstr( $ua, "Macintosh" ))
        print "<p>Greetings Mac user!</p>";
    else if( strstr( $ua, "Linux" ))
        print "<p>Greetings Linux user!</p>";
    else
        print "<p>Greetings unknown user!</p>";
?>
</body>
</html>
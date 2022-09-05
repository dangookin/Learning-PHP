<html>
<head>
    <title>Chapter 2, Movie 8</title>
</head>
<body>
    <h1>Heredoc Example</h1>
<?php

$item1 = "Alfa";
$item2 = "Bravo";
$item3 = "Charlie";

$table1 = <<<EOT
    <table border='1'><tbody>
    <tr>
    <td>$item1</td>
    <td>$item2</td>
    <td>$item3</td>
    </tr>
    </tbody></table>
EOT;

print $table1;
?>
</body>
</html>
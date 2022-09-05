<html>
<head>
    <title>Chapter 2, Movie 8</title>
</head>
<body>
    <h1>Heredoc Example</h1>
<?php
$table1 = <<<EOT
    <table border='1'><tbody>
    <tr>
    <td>Alfa</td>
    <td>Bravo</td>
    <td>Charlie</td>
    </tr>
    </tbody></table>
EOT;

print $table1;
?>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php

echo "My first PHP script!<br>";
echo '--------------------------------------------------------------------<br>';

// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x . "<br>";
echo '--------------------------------------------------------------------<br>';

// all keywords (e.g. if, else, while, echo, etc.), classes, functions,
// and user-defined functions are NOT case-sensitive.
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

echo '--------------------------------------------------------------------<br>';

//However; all variable names are case-sensitive.
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

echo '--------------------------------------------------------------------<br>';
$txt = "W3Schools.com";
echo "I love $txt!" . "<br>";
echo '--------------------------------------------------------------------<br>';
$x = 5;
$y = 4;
echo $x + $y. "<br>";
echo '--------------------------------------------------------------------<br>';

?>

</body>
</html>
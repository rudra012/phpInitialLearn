<?php
/**
 * Created by Shailesh.
 * User: root
 * Date: 12/7/16
 * Time: 7:13 PM
 */
echo '<br>--------------------------------------------------------------------<br>';

$t = date("H");
echo $t;
echo '<br>--------------------------------------------------------------------<br>';

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo '<br>--------------------------------------------------------------------<br>';

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo '<br>--------------------------------------------------------------------<br>';

$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

echo '<br>--------------------------------------------------------------------<br>';

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo '<br>--------------------------------------------------------------------<br>';

$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo '<br>--------------------------------------------------------------------<br>';

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo '<br>--------------------------------------------------------------------<br>';

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo '<br>--------------------------------------------------------------------<br>';

function writeMsg()
{
    echo "Hello world!";
}

writeMsg(); // call the function

echo '<br>--------------------------------------------------------------------<br>';

//PHP Function Arguments
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

echo '<br>--------------------------------------------------------------------<br>';

//PHP Function Arguments
function familyName2($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
echo '<br>--------------------------------------------------------------------<br>';

//PHP Default Argument Value
function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo '<br>--------------------------------------------------------------------<br>';

//PHP Default Argument Value
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo '<br>--------------------------------------------------------------------<br>';
echo '<br>--------------------------------------------------------------------<br>';
echo '<br>--------------------------------------------------------------------<br>';
echo '<br>--------------------------------------------------------------------<br>';


$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo count($cars);
echo '<br>--------------------------------------------------------------------<br>';

$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

echo '<br>--------------------------------------------------------------------<br>';

//PHP Associative Arrays

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$age['Shailesh'] = "25";
$age['PAvan'] = "20";
$age['Kamlesh'] = "30";

echo "Peter is " . $age['Peter'] . " years old.";

echo '<br>--------------------------------------------------------------------<br>';

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo '<br>--------------------------------------------------------------------<br>';
echo '<br>--------------------------------------------------------------------<br>';
echo '<br>--------------------------------------------------------------------<br>';
echo '<br>--------------------------------------------------------------------<br>';

function print_array($array_elements){
    foreach ($array_elements as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
}
$cars = array("Volvo", "BMW", "Toyota");
print_array($cars);
echo "After Sorting..<br>";
sort($cars);
print_array($cars);

echo '<br>--------------------------------------------------------------------<br>';

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_array($numbers);
echo '<br>--------------------------------------------------------------------<br>';

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_array($cars);
echo '<br>--------------------------------------------------------------------<br>';

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
echo '<br>--------------------------------------------------------------------<br>';

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);
print_array($numbers);
echo '<br>--------------------------------------------------------------------<br>';

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);
print_array($age);
echo '<br>--------------------------------------------------------------------<br>';

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);
print_array($age);
echo '<br>--------------------------------------------------------------------<br>';

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age);
print_array($age);
echo '<br>--------------------------------------------------------------------<br>';

?>
<?php
/**
 * Created by Shailsh Rudra.
 * User: root
 * Date: 12/7/16
 * Time: 5:11 PM
 */

$x = 5; // global scope

function myTest1()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}

echo '--------------------------------------------------------------------<br>';

myTest1();

echo "<p>Variable x outside function is: $x</p>";
echo '--------------------------------------------------------------------<br>';

function myTest2()
{
    $y = 5; // local scope
    echo "<p>Variable y inside function is: $y</p>";
}

myTest2();


// using y outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";

echo '--------------------------------------------------------------------<br>';

$a = 5;
$b = 10;

function myTest3()
{
    global $a, $b;
    $b = $a + $b;
}

myTest3();
echo "Global variable b after sum: " . $b . "<br>";

echo '--------------------------------------------------------------------<br>';
$a = 5;
$b = 10;
$c = 0;

function myTest4() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

myTest4();
echo "Global variable b after sum: " . $b . "<br>";

echo '--------------------------------------------------------------------<br>';

//when a function is completed/executed, all of its variables are deleted. 
function myTest() {
    static $g = 0;
    $g++;
    echo "g = ". $g;

    $y = 0;
    $y++;
    echo ", y = " . $y. "<br>";
}

myTest();
myTest();
myTest();

//Note: The static variable is still local to the function.
echo "g = ". $g;

?>
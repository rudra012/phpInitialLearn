<?php
/**
 * Created by Shailesh.
 * User: root
 * Date: 12/7/16
 * Time: 6:00 PM
 */

$x = "Hello world!";
$y = 'Hello world!';
echo '<br>--------------------------------------------------------------------<br>';

echo $x;
echo "<br>";
echo $y;

echo '<br>--------------------------------------------------------------------<br>';

$x = 5985;
var_dump($x);
$x =  2147483647123456789;
$x = $x+$x;
var_dump($x);
$x =  -2147483648;
var_dump($x);

echo '<br>--------------------------------------------------------------------<br>';

$x = 10.365;
var_dump($x);

echo '<br>--------------------------------------------------------------------<br>';

$x = true;
$y = false;
var_dump($x);
var_dump($y);

echo '<br>--------------------------------------------------------------------<br>';

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo '<br>--------------------------------------------------------------------<br>';

class Car {
    function Car() {
        $this->model = "MAHINDRA XUV";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo "Car model: ",$herbie->model;
echo '<br>--------------------------------------------------------------------<br>';


$x = "Hello world!";
$x = null;
var_dump($x);

?>
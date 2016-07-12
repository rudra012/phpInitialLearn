<?php
/**
 * Created by Shailesh.
 * User: root
 * Date: 12/7/16
 * Time: 7:40 PM
 */

function print_array($array_elements)
{
    foreach ($array_elements as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
}

echo '<br>--------------------------------------------------------------------<br>';

$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo '<br>--------------------------------------------------------------------<br>';
echo "Global Details: <br>";
print_array($GLOBALS);
echo '<br>--------------------------------------------------------------------<br>';

echo "Server Details: <br>";
print_array($_SERVER);

echo '<br>--------------------------------------------------------------------<br>';
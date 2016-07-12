<?php
/**
 * Created by Shailesh.
 * User: root
 * Date: 12/7/16
 * Time: 6:18 PM
 */
$str = "Hello world!";
echo '<br>--------------------------------------------------------------------<br>';
echo "length of '", $str, "' : ",  strlen($str); // outputs 12
echo '<br>--------------------------------------------------------------------<br>';
echo "words in '", $str, "' : ", str_word_count($str); // outputs 2
echo '<br>--------------------------------------------------------------------<br>';
echo strrev($str); // outputs !dlrow olleH
echo '<br>--------------------------------------------------------------------<br>';
echo "'world' position : ", strpos($str, "world"); // outputs 6
echo '<br>--------------------------------------------------------------------<br>';
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo '<br>--------------------------------------------------------------------<br>';
?>
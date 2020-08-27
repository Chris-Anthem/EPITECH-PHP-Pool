<?php

/*Exercise 08
2pts
Turn in: pool_php_d01/ex_08/ex_08.php
Prototype: void print_array(array $my_array);
Restrictions: Obligation to use the keyword “foreach”.
Write a function that displays all the values of the array passed as parameter, each value being followed by a new
line.*/

function print_array(array $value)

{
    foreach($value as $elem)
    {
    echo $elem  . "\n";
    }
}

//$fruits = array("a" => "orange", "b" => "banana", "c" => "apple");
//print_array($fruits);
<?php

/*Exercise 06
1pt
Turn in: pool_php_d01/ex_06/ex_06.php
Restrictions: All functions that are not anonymous are forbidden.
Create an anonymous function that takes as parameter a variable of type string and returns its equivalent in upper
case. You will have to assign this anonymous function to a variable “func”.*/

$func = function ($name)
{
$name = strtoupper($name);
return $name;
};

//var_dump($func);
<?php

// NON TERMINE

/*Exercise 10
2pts
Turn in: pool_php_d01/ex_10/ex_10.php
Prototype: array my_get_args([mixed $var, ...]);
Restrictions: Use of func_get_args forbidden.
Write a function my_get_args that takes as parameter a variable number of arguments and returns these arguments
in an array.*/

function my_get_args(...$var) {
    return $var;
}

//var_dump(my_get_args('toto','hjuytf', 5, ')','k',864624 ));
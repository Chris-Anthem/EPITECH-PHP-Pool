<?php

/*Exercise 05
2pts
Turn in: pool_php_d01/ex_05/ex_05.php
Prototype: void my_swap(mixed &$a, mixed &$b);
Restrictions: None.
Write a function that exchanges the content of two variables whose references are given as parameters.*/

function my_swap(&$a, &$b)
{
    $temporaire = $a ;
    $a = $b ;
    $b = $temporaire;
}

//$a=5;
//$b= 19;
//echo $a.' '. $b."\n";
//my_swap($a, $b);
//echo $a.' '. $b."\n";
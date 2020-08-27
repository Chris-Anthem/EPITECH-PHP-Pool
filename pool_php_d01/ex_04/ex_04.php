<?php

/*Exercise 04
1pt
Turn in: pool_php_d01/ex_04/ex_04.php
Prototype: void my_concat(mixed $str1, mixed $str2);
Restrictions: You will have to choose between “echo” and “print” for this function, and you will use only once the
display function that you have chosen.
Create a function named “my_concat” that takes two parameters. The function must display the first parameter
followed by a space followed by the second parameter.
Example:
<? php
r e q u i r e ( " ex_04 . php " ) ;
my_concat ( " H e l l o " , " w o r l d " ) ;
∇
∼/pool_php_d01> php index.php
Hello world
∼/pool_php_d01>*/

function my_concat($par1, $par2)
{
echo $par1, " ", $par2;
}

//my_concat("Hello", "World\n");

?>
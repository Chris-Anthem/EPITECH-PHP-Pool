<?php

/*Exercise 07
2pt
Turn in: pool_php_d01/ex_07/ex_07.php
Prototype: string get_angry_dog(int $nbr);
Restrictions: Obligation to use the keyword “for”.
Write a function that returns a string composed of as many “woof” as the value of the variable passed as param-
eter, followed by a new line. Example:
<? php
r e q u i r e ( " ex_07 . php " ) ;
echo ( get_angry_dog ( 3 ) ) ;
∇
∼/pool_php_d01> php index.php
woofwoofwoof
∼/pool_php_d01>*/

function get_angry_dog($nbr)
{
  $WoofVar=null;
    for ($i=0; $i<$nbr ; $i++)
    {
        $WoofVar.= "woof";
    }
    //var_dump($WoofVar);
    return $WoofVar."\n";
    }

//echo get_angry_dog(3);
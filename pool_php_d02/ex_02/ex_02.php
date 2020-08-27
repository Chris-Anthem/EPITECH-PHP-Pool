<?php

/*+EXERCISE 02 (2PT)
**_____
**Turn in: pool_php_d02/ex_02/ex_02.php
**Prototype: my_create_map(mixed . . . $array);
**Restrictions: None.
**Create a function which takes a variable number of arrays as arguments and returns them in the form of a
**map.
**The arrays must be valid. They must contain at least two values, you must use the first one as a key for the
**map and the second one as the associated value (ignore all other values).
**If the parameters are not valid, you must print the following message: “The given arguments aren’t valid.”
**followed by a line feed. And return NULL.
*/

//Lis et compte le tableau
function my_create_map(...$array)
{
    for ($i=0; $i < count($array); $i++)
    {
        if(count($array[$i])!=2)
        {
            echo "The given arguments aren't valid.\n";
            return NULL;
        }
    }

//création d'un tableau vide pour éviter d'écraser les anciens.
    $i=0;
$array3=array();
//while isset pour dire "tant que le tableau existe, rempli avec de nouvelles strings"
    while(isset($array[$i]))
    {
        $array3 +=array ($array[$i][0] => $array[$i][1]);
        $i++;
    }
return $array3;
//retourner le tableau créé avec les valeurs ajoutées.
}

// valeurs des 2 premiers tableaux à retourner
$array1=["pi", 3.14];
$array2=["answer", 42];

//var_dump(my_create_map($array1, $array2));

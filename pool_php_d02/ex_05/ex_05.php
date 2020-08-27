<?php

/*EXERCISE 05 (2PTS)
**
**Turn in: pool_php_d02/ex_05/ex_05.php
**Prototype: my_add_elem_map(mixed $key, mixed $value, mixed &$map);
**Prototype: my_modify_elem_map(mixed $key, mixed $value, mixed &$map);
**Prototype: my_delete_elem_map(mixed $key, mixed &$map);
**Prototype: my_is_elem_valid(mixed $key, mixed $value, mixed &$map);
**
**Create three functions which can add, modify and delete a value in a **map with its key. The functions will
**return the map after changes.
**Create another function to check if the value of a certain key is **the same than the value given in parameters,
**and if the key exists.
**If the value and the key exist, return true, otherwise, return false.
**Here is the error message (even for my_is_elem_valid): “You have to **give good parameters.” followed by a new line.
*/


function my_add_elem_map($key, $value, &$map)
{
    $map['$key']= $value;
    return $map;
}

function my_modify_elem_map($key, $value, $map)
{
    $replace=array($key => $value);
    $map = array_replace($map, $replace);
    return ($map);
}

function my_delete_elem_map($key, $map)
{
    unset($map['$key']);
    return($map);
}

function my_is_elem_valid($key, $value, $map)
{
   foreach($map as $values)
   {
     if($values == $key)
     {
         return true;
     }
     else 
     {
         echo"You have to give good parameters.\n";
         return false;
     }
   }
}

$map=[$a, $b, $c, $d, $e];
$key="un";
$value =1;

var_dump(my_add_elem_map($key,$value,$map));

$key = "deux";
$value=2;

var_dump(my_modify_elem_map($key,$value,$map));
echo "mymodify.\n";

$key="deux";
$value=2;
var_dump(my_add_elem_map($key,$value,$map));

$value=6;
//var_dump(my_is_elem_valid($key,$value,$value));


//my_add_elem_map($key, $value, $map);
//my_modify_elem_map($key, $value, $map);
//my_delete_elem_map($key, $map);
//my_is_elem_valid($key, $value, $map);
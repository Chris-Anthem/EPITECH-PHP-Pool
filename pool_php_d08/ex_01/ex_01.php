<?php

/*_ EXERCISE_01   (1 PT)
_____
File to hand in: pool_php_d08/ex_01/ex_01.php
Write a function my_very_secure_hash that takes as parameter a password in
plain-text and returns it hashed in MD5.
*/

function my_very_secure_hash($password)
{
    $password = md5 ($password);
    
    return $password;
}

// $password = my_very_secure_hash('ghjk');
// var_dump($password);
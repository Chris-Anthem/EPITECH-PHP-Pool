<?php

//_ EXERCISE 04 (2PT)
//_____
//Turn in: pool_php_d02/ex_04/ex_04.php
//Prototype: array my_password_hash(string $password);
//Prototype: bool my_password_verify(string $password, string $salt, string $hash);
//Write a function my_password_hash that takes as parameter a password in plain-text and returns an array
//containing the hashed password in MD5, as well as the “salt” used for hashing. The salt must be different
//on each call.
//Then write a function my_password_verify that takes as parameter a password in plain-text, a salt and a
//hashed password. This function must return true or false, depending on whether the hashed password cor-
//responds to the plain-text password with the associated salt or not.
//The array returned by the function my_password_hash has to look like this:
//$array = [
//    “hash” => “XXXXX”,
//    “salt” => “12345”,
//    ];

function my_password_hash($password)
{
    $salt=md5(uniqid(rand(), false));  
    $hash=md5(crypt($password, $salt));
    $array=array("hash" => $hash, "salt" => $salt);
    return $array;
}

function my_password_verify($password, $salt, $hash)
{
    $hash_verify=md5(crypt($password, $salt));
    $bool=(strcmp($hash_verify, $hash) !=0 ? false : true);
    return $bool;
}
 
    /*password = "blabla";
    **print_r(my_password_hash ("blabla"));
    **$tab= my_password_hash($password);
    **var_dump(my_password_verify($password, $tab[""], $tab ["hash"]));
    */
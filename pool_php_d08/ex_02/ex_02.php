<?php

/*_ EXERCISE 02   (3_ PTS)
**_____
**File to hand in: pool_php_d08/ex_02/ex_02.php
**The issue with basic cryptography is that if two input are identical then, the output will also be identical.
**Let’s imagine that your database becomes compromised, in your database you have 2 users: “Didier” and
**“Wladimir”, they both share the same password “potiron”, but Wladimir also got his password compromised
**because of a key logger he got while surfing on some dark site.
**Because the hash for Didier’s and Wladimir’s password will be identical it will be very easy for the peo-
**ple who got access to your database to now guess Didier’s password. Now, instead of one stolen password,
**you actually got two. If Didier didn’t follow basic secure good practice (like Wladimir) and also used this
**password for his mailbox, his mailbox also became compromised, and so on. . .
**To counter that, we use something called “salt”, it is something randomly generated that will be added to the
**password before being hashed/encrypted, thanks to that all output will be different, even if the input was
**identical. That’s it for the introduction of this exercise, don’t forget to applaud our 2 friends that volunteered
**for this introduction.
**Write a function my_password_hash that takes as parameter a password in plain-text and returns an array
**containing the hashed password in MD5 as well as the “salt” used for hashing. The salt must be different
**on each call. Then write a function my_password_verify that takes as parameter a password in plain-text,
**a salt, and a hashed password. This function must return true or false, depending on whether the hashed
**password corresponds to the plain-text password with the associated salt or not.
**Protype: array my_password_hash(string $password)
**Protype: bool my_password_verify(string $password, string $salt, string $hash)
**The array return by the function my_password_hash should look like this:
**
**$array = [
**“hash” => “XXXXX”,
**“salt” => “12345”
**];
*/


function my_very_secure_hash($password)  //CRYPTAGE DU PASSWORD
{
    $password = md5 ($password);
    
    return $password;
}

function my_password_hash($password)  //AJOUTE UN SALT
{
    $salt=md5(uniqid(rand(), false));  //CREER UN SALT
    $hash=md5(crypt($password, $salt)); //HASH DEVIENT PASSWORD + SALT
    $array=array("hash" => $hash, "salt" => $salt); //MET LE TOUT DANS UN ARRAY
    return $array; 
}

function my_password_verify($password, $salt, $hash)  //VERIFICATION DU PASSWORD 
{
    $hash_verify=md5(crypt($password, $salt));  //RECUPERE LE PASSWORD + LE SALT ET LE MET DANS UNE VARIABLE 
    $bool=(strcmp($hash_verify, $hash) !=0 ? false : true); //COMPARE LE NOUVEAU HASH RECU AVEC LE HASH STOCKE
    return $bool; //RETOURNE LE RESULTAT VRAI OU FAUX
}

    // $password = "a";
    // print_r(my_password_hash ("a"));
    // $tab= my_password_hash($password);
    //var_dump(my_password_verify($password, $tab[""], $tab ["hash"]));
    
<?php

/*Exercise 09
2pts
Turn in: pool_php_d01/ex_09/ex_09.php
Prototype: void print_movie_from_nbr(int $nbr); a
Restrictions: Obligation to use the keyword “switch”.
Write a function that takes an integer as parameter. If the value is 3, it displays “The Three Brothers”. If the value
is 6, it displays “The Sixth Sense”. For 23, it displays “The Number 23”. And for 28, it displays “28 Days Later”. For other
values, it will displays “I don’t know.”. A new line will be called after each display.*/

function print_movie_from_nbr($nbr)
{
    switch ($nbr) {
        case 3:
            echo "The Three Brothers\n";
            break;
        case 6:
            echo "The Sixth Sense\n";
            break;
        case 23:
            echo "The Number 23\n";
            break;
        case 28:
            echo"28 Days Later\n";
            break;
        default:
        echo "I don't know.\n";
    }
}

//print_movie_from_nbr(6);
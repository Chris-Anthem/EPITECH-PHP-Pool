<?php

/*Exercise 07 1pt
**Turn in: pool_php_d09/ex_07/ex_07.php
**Restrictions: None
**Create a function modify_cookie that takes as parameter the name of a cookie as well as a value, and refreshes the
**value of the cookie in question.
**Prototype: void modify_cookie(string $name, mixed $value);
*/

function modify_cookie($name,$value)
{
    setcookie($name,$value);
}

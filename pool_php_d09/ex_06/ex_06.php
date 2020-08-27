<?php

/*Exercise 06  1pt
**Turn in: pool_php_d09/ex_06/ex_06.php
**Restrictions: None
**Create a function remove_cookie that takes as parameter the name of a cookie and deletes it.
**Prototype: void remove_cookie(string $cookie);
*/


function remove_cookie()
{
    setcookie($name, time () -3600 * 24);
}
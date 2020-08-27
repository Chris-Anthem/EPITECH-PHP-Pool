<?php

/*Exercise 02  2pts
**Turn in: pool_php_d09/ex_02/index.php
**Restrictions: None.
**Take a look at the superglobal $_GET.
**Create a new file index.php which greets the user by his name when you access it from a web browser.
**If no name is specified, you will use the default name “platypus”.
**The user name will be given in the URL granting access to the file from a web browser.
**Example:
**> http://localhost/index.php?name=Martin -> displays “Hello Martin”
*/

if ($_GET["name"] !== null)
    {
    echo "Hello " .htmlspecialchars($_GET["name"]);
    }
    
    else if ($_GET["name"] == NULL)
{
    echo "Hello platypus \n";
}



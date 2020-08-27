<?php

/*Exercise 03  2pts
**Turn in: pool_php_d09/ex_03/index.php
**Restrictions: None.
**$_SESSION
**Create a new file index.php that saves the user name given in the URL so that if you access again the file whithout
**specifying the name, the last name will be displayed.
**However, if the user closes the browser, the stored data must not be kept.
**Example:
**> http://localhost/index.php -> displays “Hello platypus”
**> http://localhost/index.php?name=Martin -> displays “Hello Martin”
**> http://localhost/index.php -> displays “Hello Martin”
*/

session_start();

if ($_GET["name"] !== null)
{
    $_SESSION["name"] = $_GET["name"];
    echo "Hello " .htmlspecialchars($_SESSION["name"]);
}

else if (isset($_SESSION["name"]))
{
    echo "Hello " .$_SESSION["name"];  
}
    
else if ($_GET["name"] == "" && $_SESSION["name"]== NULL)
{
    echo "Hello platypus \n";
}

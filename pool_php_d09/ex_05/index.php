<?php

/*Exercise 05
**2pts
**Turn in: pool_php_d09/ex_05/index.php
**Restrictions: None
**Repeat exercise 3, but this time the data stored must be kept even when the user closes the browser.
**For this, you will create a cookie named “name”.
*/

session_start();
setcookie($name, time() + 3600);

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

function remove_session()
    {
    unset($_SESSION['name']);
    session_destroy();
    session_start();
}
?>


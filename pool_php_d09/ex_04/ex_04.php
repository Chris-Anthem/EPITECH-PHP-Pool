<?php

/*Exercise 04
**1pt
**Turn in: pool_php_d09/ex_04/ex_04.php
**Restrictions: None
**Create a function remove_session that empties the session, deletes and resets it.
**Prototype: void remove_session(void);
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

function remove_session()
{
    unset($_SESSION['name']);
    session_destroy();
    session_start();
}
?>


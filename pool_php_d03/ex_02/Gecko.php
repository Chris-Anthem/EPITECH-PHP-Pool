<?php

/*EXERCISE_ 02 (3PTS)
**_____
**Turn in: pool_php_d03/ex_02/Gecko.php
**Restrictions: None.
**Copy your “Gecko.php” from Exercise 01. We’re going to add a few things to it.
**You shall modify your constructor so that it becomes possible to pass a name as parameter for our new
**Gecko being created.
**If a name is specified, it will now display “Hello <Name> !” followed by a newline.
**Otherwise, it will still display the same thing as in exercise 01.
**This parameter will need to be stocked in an attribute “name” that will be public.
*/

class Gecko

{
    public $name;

    public function __construct($name=NULL)
    {
        $this ->name = $name;
    
        if ($name!=null)
        {
            echo "Hello " . $name . " !" . "\n";
        }
        else
        {
            echo "Hello !\n";
        }
    }
}

//$moto = new Gecko("Moto");
//$thomas = new Gecko("Thomas");
//$annonymus = new Gecko();
//echo $thomas->name;
//echo $annonymus->name . "\n";
<?php

/*EXERCISE_ 01 (3PTS)
**_____
**Turn in: pool_php_d04/ex_01/Mars.php
**Restrictions: None.
**Create a new class “Mars”: it will have an attribute id for which you will create a getter (getId) but no setter.
**You must create your class so that the first instance of “Mars” has an id of 0, the second an id of 1. . .
*/

class Mars
{
    private $Id;
    private static $count=0;
    
    public function getId()
    {
    return $this->Id;
    }

    public function __construct()
    {
      $this->Id= self::$count;
      self::$count++;
    }
}
/*
$rocks = new Mars();
$lite = new Mars();
$snack = new Mars();
echo $rocks->getId()."\n";
echo $lite->getId()."\n";
echo $snack->getId()."\n";
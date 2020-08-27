<?php

/*EXERCISE 02 (2PTS)
**_____
**Turn in: pool_php_d04/ex_02/Astronaut.php
**Restrictions: None.
**Create a new class “Astronaut” with the following attributes:
**- name: a string describing the name of the Astronaut
**- snacks: an integer describing the number of snacks our Astronaut possesses
**- destination: will be used to store his destination later
**- id: an integer describing the id of the Astronaut
**The name must be passed during the creation of the Astronaut, it is mandatory, his snack will be initial-
**ized to 0 and his destination to null.
**The id must be unique and be incremented for each new Astronaut being created (i.e the first Astronaut of
**our program must have id 0, then the second one will have id 1 etc. . . )
**Moreover, every Astronaut being created will display:
**∇
**Terminal
**∼/C-COD-150> [name] ready for launch!
**- + x
**Where [name] is the name of the Astronaut.
**You must also add a getter for id (getId) but no setter, and a getter for destination (getDestination) without
**setter.
*/

/*Example :
**∼/C-COD-150> cat example.php
**<?php
**include_once(“Astronaut.php”);
**$mutta = new Astronaut(“Mutta”);
**$hibito = new Astronaut(“Hibito”);
**echo $mutta->getId() . “\n”;
**echo $hibito->getId() . “\n”;
**----------------------------
**C-COD-150> php example.php
**Mutta ready for launch !
**Hibito ready for launch !
**0
**1
**∼/C-COD-150>
*/

class Astronaut
{
    private $name;
    private $snacks;
    private $destination;
    private $Id;
    private static $count=0;
    
    public function __CONSTRUCT($name, $snacks=0,$destination=null)
    {
        $this->destination= $destination;
        $this->snacks=$snacks;
        $this->name= $name;
        $this->Id= self::$count;
        self::$count++;
        echo "$this->name ready for launch !\n";
    }

    public function getId()
    {
        return $this->Id;
    }

    public function getDestination()
    {
        return self::$Desination;
    }

}


//$Mutta=new Astronaut ("Mutta");
//$Hibito=new Astronaut ("Hibito");
//echo $Mutta->getId() . "\n";
//echo $Hibito->getId() . "\n";

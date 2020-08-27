<?php

/*_ EXERCICE 10 (1_ PT)
**_____
**Hand in: pool_php_d07/ex_10/character.class.php
**Create a class named “Character” with private attributes “name”, “strength,”magic“,”intelligence" and “life”.
**The value of the attribute “name” can be sent at the object creation. If it is not sent in parameters, it will
**take the value $i. The values by default during instantiation will be, respectively, $i, 0, 0, 0 and 100.
**Make the protected methods “getName”, “getStrength”, “getMagic”, “getIntelligence” and “getLife”.
**Make an implementation of the method “textendashtextendash toString” in order to match the displayed
**example.
**Prototype: --construct([string $name]);
**$i will have to be replaced by the occurrence of the number of characters
**created without any name. The first created “1”, the second “2”,
**the third “3”, and so on and so forth. . .
*/

class Character 
{
private $name;
private $strength;
private $magic;
private $intelligence;
private $life;
private static $i = 0;

    public function __CONSTRUCT($name=null)
    { 
        $this->strength=0;
        $this->magic=0;
        $this->intelligence=0;
        $this->life=100;

        if($name==null)
        {
           self::$i++;
           $this->name="Character " . self::$i;    
        }
        else
        {
            $this->name=$name;
        }

    }

    protected function getName()
    {
        return $this->name;
    }
    protected function getStrength()
    {
        return $this->strength;
    }
    protected function getMagic()
    {
        return $this->magic;
    }
    protected function getIntelligence()
    {
        return $this->intelligence;
    }
    protected function getLife()
    {
        return $this->life;
    }
    public function __toString()
    {
       return "My name is " . $this->name . ".\n";
    }

}

// foreach([new Character, new Character("Julien"), new Character] as $character)
// {
// echo $character;
// }




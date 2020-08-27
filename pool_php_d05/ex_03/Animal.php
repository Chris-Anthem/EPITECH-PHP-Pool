<!-- EXERCISE  03  (4PT) 
_____
Turn in: pool_php_d05/ex_03/Cat.php 
pool_php_d05/ex_03/Animal.php 
Restrictions: None. 
Copy your “Animal.php” from the previous exercise. 
Create a new class “Cat”, which shall inherit from “Animal”. This class must have a private attribute “color” 
with a getter and setter. 
When creating a “Cat”, it must display:
∇ 
Terminal
 
[name]: MEEEOOWWWW 
Where [name] shall be replaced by . . . the name of the cat ! 
The name of the cat should always be specified as the first parameter of its constructor, however the color 
can be specified as its second parameter but is not mandatory. Its number of legs will be set to 4 and its 
type to MAMMAL by default (not parameters). 
Add a public method “meow” to your class “Cat”. This method does not take any parameter, when calling 
it, you must display the following message: 
∇
Terminal 
- +
[name] the [color] kitty is meowing. 
Where [name] shall be replaced by the name of the cat . . . and [color] by its color. 
If no color has been specified during creation, the default color will be grey. 
Example:  
Terminal 
- + x 
∼/C-COD-150> cat index.php 
 include_once(“Cat.php”);
 $isidore = new Cat(“Isidore”, “orange”);
 echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .
 $isidore->getType() . “.\n”;
 $isidore->meow();
 ∇
 Terminal
 ∼/C-COD-150> php index.php
 My name is Isidore and I am a mammal !
 Isidore: MEEEOOWWWW
 Isidore has 4 legs and is a mammal.
 Isidore the orange kitty is meowing. -->

<?php

class Animal
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    private $name;
    protected $legs;
    protected $type;
    private static $NumberOfAnimalsAlive=0;
    private static $NumberOfMammalsAlive=0;
    private static $NumberOfFishesAlive=0;
    private static $NumberOfBirdsAlive=0;

    public function __CONSTRUCT($name=NULL, $nbrLegs=NULL, $type)
    {
        self::$NumberOfAnimalsAlive++;
        $this->name=$name;
        $this->legs=$nbrLegs;
        switch($type)
        {
            case 0:
                $this->type=0;
                self::$NumberOfMammalsAlive++;
                break;
            case 1:
                $this->type=1;
                $this->legs="0";
                self::$NumberOfFishesAlive++;
                break;
            case 2:
                $this->type=2;
                $this->legs="2";
                self::$NumberOfBirdsAlive++;
                break;
            default:
                echo "Type is no valid.\n";
        }

        echo "My name is " . $this->name . " and I am a " . $this->getType() . "!\n";
    }

    public function __DESTRUCT()
    {
        self::$NumberOfAnimalsAlive--;
        
        switch($this->type)
        {
            case 0:
                self::$NumberOfMammalsAlive--;
                break;
            case 1:
                self::$NumberOfFishesAlive--;
                break;
            case 2 :
                self::$NumberOfBirdsAlive--;
                break;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name=$name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getType()
    {
        if ($this->type === 0)
        {
            return "mammal";
        }

        if ($this->type === 1)
        {
            return "fish";
        }
        
        else if ($this->type === 2)
        {   
            return "bird";
        }
    }

    public function setType($type){

        return $this->type=$type;
    }

    public static function getNumberOfAnimalsAlive()
    {
        if(self::$NumberOfAnimalsAlive >= 2)
        {
            echo "There are currently " . self::$NumberOfAnimalsAlive . " animals alive in our world.\n";
        }

        if(self::$NumberOfAnimalsAlive <= 1)
        {
            echo "There is currently " . self::$NumberOfAnimalsAlive . " animal alive in our world.\n";
        }
        
        return self::$NumberOfAnimalsAlive;
    }

    public static function getNumberOfMammals()
    {
        if(self::$NumberOfMammalsAlive >= 2)
        {
            echo "There are currently " . self::$NumberOfMammalsAlive . " mamals alive in our world.\n.";
        }

        if(self::$NumberOfMammalsAlive <= 1)
        {
            echo "There is currently " . self::$NumberOfMammalsAlive . " mamal alive in our world.\n";
        }

        return self::$NumberOfMammalsAlive;
    }

    public static function getNumberOfFishes()
    {
        if(self::$NumberOfFishesAlive >= 2)
        {
            echo "There are currently " . self::$NumberOfFishesAlive . " fishes alive in our world.\n.";
        }

        if(self::$NumberOfFishesAlive <= 1)
        {
            echo "There is currently " . self::$NumberOfFishesAlive . " fish alive in our world.\n";
        }

        return self::$NumberOfFishesAlive;
    }
    
    public static function getNumberOfBirds()
    {
        if(self::$NumberOfBirdsAlive >= 2)
        {
            echo "There are currently " . self::$NumberOfBirdsAlive . " birds alive in our world.\n.";
        }

        if(self::$NumberOfBirdsAlive <= 1)
        {
            echo "There is currently " . self::$NumberOfBirdsAlive . " bird alive in our world.\n";
        }
        return self::$NumberOfBirdsAlive;
    }
}
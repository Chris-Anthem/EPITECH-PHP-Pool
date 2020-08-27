<?php

/*_ EXERCISE_ 04_ (4PT)
**
**Turn in: pool_php_d05/ex_04/Cat.php
**pool_php_d05/ex_04/Animal.php
**pool_php_d05/ex_04/Shark.php
**pool_php_d05/ex_04/Canary.php
**Restrictions: None
**Copy your classes from the previous exercise.
**Create a class “Shark” and “Canary” both inheriting from “Animal”.
**When creating a “Shark”, you must display:
**
**A KILLER IS BORN !
**
**The class “Shark” will also have a private attribute named “frenzy”.
**When the class will be constructed it will receive its name as parameter, its number of legs should be set to
**0 and its type to “FISH”, its attribute “frenzy” should be on “false” by default.
**You must also add a method “smellBlood” to it, it will take a Boolean as parameter and return nothing. This
**method will change the value of “frenzy” to the value passed as parameter.
**Finally you must add a method “status”, it will display one of the two fllowing messages depending on
**frenzy:
**begin{itemize}
**- If “frenzy” is true:
**
**Terminal
**
**[name] is smelling blood and wants to kill.
**where [name] will be replaced by the shark’s name.
**- If “frenzy” is false:
**
**Terminal
**[name] is swimming peacefully.
**
**where [name] will be replaced by the shark’s name.
**end{itemize}
**Your class “Canary” must have a private attribute “eggs”, indicating how many eggs it laid in its life. During
**initialization “Canary” will only take its name. “legs” will be initialized to 2, “type” to BIRD and “eggs” to 0.
**During its creation it will say:
**
**Terminal
**
**Yellow and smart ? Here I am !
**You must add a method “getEggsCount” returning the number of eggs laid by the Canary.
**And a method “layEgg” that will simply increment the number of egg laid by 1.newpage
**Example :

**∼/C-COD-150> cat index.php
**<?php
**include_once(“Shark.php”);
**include_once(“Canary.php”) ;
**$titi = new Canary(“Titi”);
**$willy = new Shark(“Willy”); // Yes , Willy is a shark here!
**$willy->status();
**$willy->smellBlood(true);
**$willy->status();
**$titi->layEgg();
**echo $titi->getEggsCount() . “\n”; - + x

**∼/C-COD-150> php index.php
**My name is Titi and I am a bird!
**Yellow and smart ? Here I am !
**My name is Willy and I am a fish!
**A KILLER IS BORN !
**Willy is swimming peacefully.
**Willy is smelling blood and wants to kill.
**1
*/


class Animal
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    const SHARK = 3;
    private $name;
    protected $legs;
    protected $type;
    private static $NumberOfAnimalsAlive=0;
    private static $NumberOfMammalsAlive=0;
    private static $NumberOfFishesAlive=0;
    private static $NumberOfBirdsAlive=0;
    private static $NumberOfSharksAlive=0;

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
            case 3:
                $this->type=3;
                $this->legs="0";
                self::$NumberOfSharksAlive++;
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
            case 3 :
                self::$NumberOfSharksAlive--;
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
        
        if ($this->type === 2)
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

    public static function getNumberOfSharks()
    {
        if(self::$NumberOfSharksAlive >= 2)
        {
            echo "There are currently " . self::$NumberOfSharksAlive . " birds alive in our world.\n.";
        }
        if(self::$NumberOfSharksAlive <= 1)
        {
            echo "There is currently " . self::$NumberOfSharksAlive . " bird alive in our world.\n";
        }
        return self::$NumberOfSharksAlive;
    }

} 
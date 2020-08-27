<?php

/* EXERCISE_ 02_ (3PT)
**_____
**Turn in: pool_php_d05/ex_02/Animal.php
**Restrictions: None.
**Copy your “Animal.php” file from the previous exercise.
**You shall implement a static method in this class called “getNumberOfAnimalsAlive” returning the number
**of instances of “Animal” and displaying it in a sentence like this:
**There [is/are] currently [x] animal(s) alive in our world.
**Where [x] should be replaced by the number of animals currently alive, and (s) and [is/are] should be used
**when necessary.
**It is up to you to find how to handle this part.
**remember static?
**You will also implement three variants of this function “getNumberOfMammals”, “getNumberOfFishes” and
**“getNumberOfBirds”, returning respectively the number of mammals, fishes and birds alive in the world, and
**displaying the following message:
**There [is/are] currently [x] type alive in our world.
**Where [x] should be replaced by the number of animals currently alive of this type, and [type] by the type
**of animal of the function being called and (s) and [is/are] should be used when necessary. An example
**would be (“There are currently 3 mammals alive in our world.”).
**In english, 0 is plurial, only 1 is singular
*/


class Animal
{
    const MAMMAL = 0;
    const FISH = 1; 
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;
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

    public function getName()
    {    
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getType()
    {
        if($this->type===0)
        { 
           return "mammal";
        }
        if($this->type===2)
        {
            return "bird";
        }
        if($this->type===1)
        {
            return "fish";
        }
    }

    public static function getNumberOfAnimalsAlive()
    {
        if(self::$NumberOfAnimalsAlive == 1)
            {
            echo "There is currently ",self::$NumberOfAnimalsAlive," animal alive in our world.\n";
            return self::$NumberOfAnimalsAlive;
            }
        else if(self::$NumberOfAnimalsAlive>1)
            {
            echo "There are currently ",self::$NumberOfAnimalsAlive," animals alive in our world.\n";
            return self::$NumberOfAnimalsAlive;
            }
        else
            {
            echo "There is currently 0 animals alive in our world.\n";
            }
        return 0;
    }

        public static function getNumberOfMammals()
        {
        if(self::$NumberOfMammalsAlive == 1)
            {
            echo "There is currently ",self::$NumberOfMammalsAlive," mammal alive in our world.\n";
            return self::$NumberOfMammalsAlive;
            }
        else if(self::$NumberOfMammalsAlive>1)
            {
            echo "There are currently ",self::$NumberOfMammalsAlive," mammals alive in our world.\n";
            return self::$NumberOfMammalsAlive;
            }
        else
            {
            echo "There is currently 0 mammals alive in our world.\n";
            }
            return 0;
        }

        public static function getNumberOfFishes()
        {
        if(self::$NumberOfFishesAlive == 1)
            {
            echo "There is currently ",self::$NumberOfFishesAlive," fish alive in our world.\n";
            return self::$NumberOfFishesAlive;
            }
        else if(self::$NumberOfFishesAlive>1)
            {
            echo "There are currently ",self::$NumberOfFishesAlive," fishes alive in our world.\n";
            return self::$NumberOfFishesAlive;
            }
        else
            {
            echo "There is currently 0 fish alive in our world.\n";
            }
        return 0;
        }

        public static function getNumberOfBirds()
        {
        if(self::$NumberOfBirdsAlive == 1)
            {
            echo "There is currently ",self::$NumberOfBirdsAlive," bird alive in our world.\n";
            return self::$NumberOfBirdsAlive;
            }
        else if(self::$NumberOfBirdsAlive>1)
            {
            echo "There are currently ",self::$NumberOfBirdsAlive," birds alive in our world.\n";
           return self::$NumberOfBirdsAlive;
            }
        else
            {
            echo "There is currently 0 birds alive in our world.\n";
            return 0;
            }
            
        }
    
    public function __DESTRUCT()
    {
        self::$NumberOfAnimalsAlive--;
        //$this->name=$name;
        //$this->legs=$nbrLegs;
        
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
}

/*$isidore = new Animal("Isidore", 4, Animal::MAMMAL);
**echo  $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " . $isidore->getType() . ".\n";
**$jeanjean= new Animal("Jean-Jean", 0, Animal::FISH);
**echo  $jeanjean->getName() . " has " . $jeanjean->getLegs() . " legs and is a " . $jeanjean->getType() . ".\n";
**unset($jeanjean);
**$gertrude= new Animal("Gertrude", 2, Animal::BIRD);
**echo  $gertrude->getName() . " has " . $gertrude->getLegs() . " legs and is a " . $gertrude->getType() . ".\n";
**Animal::getNumberOfAnimalsAlive()."\n";
**Animal::getNumberOfMammals()."\n";
**Animal::getNumberOfFishes()."\n";
**Animal::getNumberOfBirds()."\n";
*/
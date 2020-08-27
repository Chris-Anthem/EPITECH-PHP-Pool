<?php

include_once("Animal.php");

class Canary extends Animal
{

private $eggs = 0;
private static $eggsCount = 0;

    public function __construct($name)
    {
        parent::__construct($name, 2, Animal::BIRD, $this->eggs);
        $this->name=$name;
        echo "Yellow and smart ? Here I am!" . PHP_EOL;
    }


    public function layEgg()
    {
        ++self::$eggsCount;
    }


    public function getEggsCount()
    {
        return self::$eggsCount;
    }

}


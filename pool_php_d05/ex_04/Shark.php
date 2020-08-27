<?php

include_once("Animal.php");

class Shark extends Animal
{

private $frenzy = false;

    public function __construct($name)
    {
        parent::__construct($name, 0, Animal::FISH);
        $this->name=$name;
        echo "A KILLER IS BORN!\n";
    }


    public function smellBlood($frenzy)
    {
        return $this->frenzy=$frenzy;
    }


    public function status ($frenzy = false)
    {
        if($this->frenzy == true)
        {
            echo "$this->name is smelling blood and wants to kill." . PHP_EOL;
        }

        else
        {
            echo "$this->name is swimming peacefully." . PHP_EOL;
        } 
    }

}


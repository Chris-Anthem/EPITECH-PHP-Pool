<?php

include_once("Animal.php");

class Cat extends Animal
{

private $color;

    public function __construct($name, $color="grey")
    {
        parent::__construct($name, 4, Animal::MAMMAL);
        $this->name=$name;
        $this->color=$color;
        echo $this->name . ": MEEEOOWWWW\n";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        return $this->color=$color;
    }

    public function meow()
    {
        echo $this->name . " the " . $this->color . " kitty is meowing.\n";
    }
}
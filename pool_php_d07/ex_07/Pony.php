<?php

/*_ EXERCICE 7 _ (1 PT)
**_____
**Hand in: pool_php_d07/ex_07/Pony.php
**Copy your previous exercise.
**Add a public method called “speak” that displays “Hiii hiii hiii” followed by a new line.
**Make sure that when you call a method that doesn’t exist in the class “Pony”, you display “I don’t know
**what to do. . . ” followed by a new line.
*/

class Pony

{
    public $gender;
    public $name;
    public $color;

    public function __CONSTRUCT($gender,$name,$color)
    {
        $this->gender=$gender;
        $this->name=$name;
        $this->color=$color;

    }

    public function getGender()
    {
        return $this->gender;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function speak()
    {
        echo "Hiii hiii hiii\n";
    }
    public function __toString()
    {
        return "Don't worry, I'm a pony!\n";
    }
    public function __call($arg1,$arg2)
    {
        echo "I don't know what to do...\n";
    }
    public function __DESTRUCT()
    {
        echo"I'm a dead pony.\n";
    }
}
<?php

/*_ EXERCICE 6 _ (1 PT)
**_____
**Hand in: pool_php_d07/ex_06/Pony.php
**Create a class “Pony” with 3 public attributes: “gender”, “name” and “color”.
**Make sure you can set these 3 attributes directly during construction (in the same order as mentioned be-
**fore).
**Make sure that, upon destruction of the pony the string “I’m a dead pony.” followed by a new line is dis-
**played.
**Also make sure that, when you use the command “echo” on a “Pony”, the message “Don’t worry, I’m a
**pony!” followed by a new line is displayed.
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

    public function __toString()
    {
        return "Don't worry, I'm a pony!\n";
    }

    public function __DESTRUCT()
    {
        echo"I'm a dead pony.\n";
    }
}
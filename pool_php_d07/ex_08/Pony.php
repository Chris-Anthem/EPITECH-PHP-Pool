<?php

/* EXERCISE_8  (1 PT)
**_____
**Hand in: pool_php_d07/ex_08/Pony.php
**Mandatory: Use of: __get and __set
**Copy the code from exercise 7.
**Put all attributes in private, but make sure that you can still access them with get and set.
**When you access with get, this must display “It’s not right to get a private attribute!” followed by a new
**line, but still return the attribute.
**When you access with set, this must display “It’s not right to set a private attribute!” followed by a new
**line, then assign the attribute of the value.
**If you set or get a non-existing attribute, it must display: “There is no attribute:” followed by the name
**of the attribute, a dot, and a new line
*/

class Pony
{
    private $gender;
    private $name;
    private $color;        
    
    public function __construct($_gender, $_name, $_color)
    {
        $this->gender = $_gender;
        $this->name = $_name;
        $this->color = $_color;
    }    
    public function getGender()
    {
        return $this->gender;
    }    
    public function setGender($_gender)
    {
        $this->gender = $_gender;
    }    
    public function getName()
    {
        return $this->name;
    }    
    public function setName($_name)
    {
        $this->name = $_name;
    }    
    public function getColor()
    {
        return $this->color;
    }    
    public function setColor($_color)
    {
        $this->color = $_color;
    }    
    public function __toString()
    {
        return "Don't worry, I'm a pony!\n";
    }    
    public function __call($nom_nonmethode, $args_nonmethode)
    {
        echo "I don't know what to do...\n";
    }    
    public function __get($attribute)
    {
        if(property_exists($this, $attribute))
        {
            echo "It's not right to get a private attribute!\n";
            return $this->$attribute;
        }
        else
        {
            echo "There is no attribute: $attribute.\n";
        }
    }    
    public function __set($attribute, $value)
    {
        if(property_exists($this, $attribute))
        {
            echo "It's not right to set a private attribute!\n";
            $this->$attribute = $value;
        }
        else
        {
            echo "There is no attribute: $attribute.\n";
        }
    }        
    public function __destruct()
    {
        echo "I'm a dead pony.\n";
    }    
    public function speak()
    {
        echo "Hiii hiii hiii\n";
    }
}



// $Rainbow = new Pony("male", "Rainbow", "blue");
// echo $Rainbow;
// $Rainbow->quelquechose();
//  echo $Rainbow->qqch;
//  echo $Rainbow->qqch = 0;
// $Rainbow->echo();
// $Rainbow->color = "red";
// echo "My color is {$Rainbow->color}\n";
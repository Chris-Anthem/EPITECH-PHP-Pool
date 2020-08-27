<?php

/*EXERCISE 06 (3PTS)
**_____
**Turn in: pool_php_d03/ex_06/Gecko.php
**Restrictions: None.
**Copy your “Gecko.php” from the previous exercise.
**Add a new method “eat” to our Gecko. It will take a string as parameter and return nothing.
**If the value of the string given in parameter is equal “Meat”, the Gecko must display the following:
**∼/C-COD-150> Yummy!
If the value is equal to “Vegetable”, your Gecko must say
**∼/C-COD-150> Erk!
**If the value is anything else, the Gecko must display
**∼/C-COD-150> I can’t eat this.
**As usual, every sentence will be followed by a newline.
**The ‘eat’ method must be case insensitive.
**Moreover, you will add a new attribute “energy” to our Gecko. By default it will be equal to 100.
**You will add a setter and a getter for this attribute (getEnergy and setEnergy).
**Every time our Gecko eats something, he will win or lose some energy.
**If he eats meat he will win 10 Energy. If he eats vegetable he will lose 10 Energy (A Gecko is carnivorous. . . ).
**In all the other cases his energy will not be modified.
**A gecko’s energy should always be between 0 and 100 (included)
*/

class Gecko
{
    private $name;
    private $age;
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($old)
    {
        $this->age = $old;
    }
    public function status()
    {
        switch($this->age)
        {
            case 0:
                echo "Unborn Gecko\n";
                break;
            case 1:
            case 2:
                echo "Baby Gecko\n";
                break;
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
                echo "Adult Gecko\n";
                break;
            case 11:
            case 12:
            case 13:
                echo "Old Gecko\n";
                break;
            default:
                echo "Impossible Gecko\n";
                break;
        }
    } 
    public function getName()
    {
        return $this->name;
    }
    public function hello($str)
    {
        if(($this->name != NULL)&&(($str != NULL) && !(is_numeric($str))))
        {
            echo "Hello ",$str,", I'm ",$this->name,"!\n";
        }
        else if(($this->name != NULL)&&($str==NULL||is_numeric($str)))
        {
            if(is_numeric($str))
            {
                $i=1;
                while($i<=$str)
                {
                    echo "Hello, I'm ",$this->name,"!\n";
                    $i++;
                }
            }
            else
            {
                echo "Hello, I'm ",$this->name,"!\n";
            }
        }
        else if($this->name == NULL)
        {
            if(is_numeric($str))
            {
                $i=1;
                while($i<=$str)
                {
                    echo "Hello !\n";
                    $i++;
                }
            }
            else
            {
                echo "Hello ",$str,"!\n";
            }
        }
    }
    public function __construct($nom=NULL,$old=NULL)
    {
        $this->age=$old;
        $this->name=$nom;
        if($this->name != NULL)
        {
            echo "Hello ",$this->name," !\n";
        }else
        {
            echo "Hello !\n";
        }
    }
    public function __destruct()
    {
        if($this->name == NULL)
        {
            echo "Bye !\n";
        }
        else
        {
            echo "Bye ",$this->name," !\n";
        }
    }
}
    


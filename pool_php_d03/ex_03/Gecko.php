<?php

/*Once again, copy your “Gecko.php” from the previous exercise.
**From now on, when your Gecko will ceases to exist, you will need to
**display “Bye <Name> !” followed by a newline.
**If they do not have a name, they will simply say “Bye !”, followed by a newline.
**Ah, speaking of name. . . From now on, the “name” attribute should not be public, you will need to find your-
**self what it should be. However, for the name to be available outside our object, we will create our very first
**method! It will be called “getName” and it will return. . . the name of the Gecko!
**/

class Gecko

{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function __construct($name=NULL)
    {
        $this->name=$name;
        
            if ($name!=null)
            {
                echo "Hello " .$name ." !\n";    
            }

            else
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

//$suzanne = new Gecko ('Suzanne');
//$thomas = new Gecko('Thomas');
//$anonymous = new Gecko();
//$serguei = new Gecko('Serguei');
//unset($serguei);
//echo $thomas->getName() ."\n";
//echo $anonymous->getName() . "\n";
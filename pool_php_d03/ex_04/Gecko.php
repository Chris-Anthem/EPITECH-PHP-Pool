<?php

/*_ EXERCISE 04 (3PTS)
**Turn in: pool_php_d03/ex_04/Gecko.php
**Restrictions: None.
**Copy your “Gecko.php” from the previous exercise.
**Add a new attribute “Age” to our Gecko class. It should be possible to specify it as a second parameter
**during the construction of the object.
**This attribute will have its own getter and setter, respectively “getAge” and “setAge”.
**Moreover, you will add a new method “status” to our Gecko. This method will take no parameter, and must
**display a sentence depending on the Gecko’s age. You must use a ‘switch’ statement and you are not allowed
**to use the ‘if’ keyword in this method.
**The method must display the following sentences:
**- “Unborn Gecko” if the age is 0.
**- “Baby Gecko” if the age is 1 or 2.
**- “Adult Gecko” if the age is between 3 and 10.
**- “Old Gecko” if the age is between 11 and 13.
**- “Impossible Gecko” otherwise.
**Each of these sentences must be followed by a newline.
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

/*$thomas = new Gecko("Thomas");
**$anonymous = new Gecko("");
**$serguei = new Gecko("Serguei"); 
**unset($serguei);
**echo $thomas->getName()."\n";
**echo $anonymous->getName()."\n"; 
**$thomas = new Gecko("Thomas", 1);
**$anonymous = new Gecko("anonymous", 14);
**$serguei = new Gecko("Serguei", 11);
**echo $thomas->getAge()."\n";
**echo $serguei->getAge()."\n";
**echo $thomas->setAge(4)."\n";
**echo $thomas->getAge()."\n";
**echo $thomas->status()."\n";
**echo $serguei->status()."\n";
**echo $anonymous->status()."\n";
*/
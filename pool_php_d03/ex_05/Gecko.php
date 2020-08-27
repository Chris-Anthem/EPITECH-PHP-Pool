<?php

/*_ EXERCISE_ 05_ (4PTS)
**
**Turn in: pool_php_d03/ex_05/Gecko.php
**Restrictions: None.
**It is time. . . to give the gift of speech to our Geckos! Firstly, copy your previous “Gecko.php”
**Add a new public method to it, called “hello”.
**When called with a string, it will display “Hello <string>, I’m
**<Name>!”, with <string> being the string given as parameter and
**<Name> being the name of the Gecko. If our Gecko doesn’t have a
**name it will only display “Hello <string>!”.
**However, if an integer is given as parameter it will display
**“Hello, I’m <Name>!” as often as the number given as parameter.
**Once again, if our Gecko doesn’t have a name it will display something else: “Hello !”.
**Every message must be followed by a newline.
*In all other cases, the method does nothing.
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
            if(($this->name != NULL)&&(($str != NULL) && !(is_int($str))))
            {
                echo "Hello ",$str,", I'm ",$this->name,"!\n";
            }
            else if(($this->name != NULL)&&($str==NULL||is_int($str)))
            {
                if(is_int($str))
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
                if(is_int($str))
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
    
//$dylan = new Gecko("Dylan");
//$dylan->hello("Teddy");
//$dylan->hello(2);
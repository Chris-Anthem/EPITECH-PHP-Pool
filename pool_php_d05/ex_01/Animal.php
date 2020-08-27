<?php

/*EXERCISE _ 01_ (4PT)
**_____
**Turn in: pool_php_d05/ex_01/Animal.php
**Restrictions: None.
**Create a new class “Animal”.
**This new class will need to have three const attributes initialized like this:
**• MAMMAL = 0
**• FISH = 1
**• BIRD = 2
**These variables will be used to pass to the constructor the type of our Animal.
**The constructor will take three parameters.
**• The first parameter will be the name of our animal.
**• The second parameter will be the number of legs of our animal.
**• The third will be one of the three attributes created previously (MAMMAL, FISH, BIRD) representing
**the type of our animal.
**These three parameters will obviously need to be stocked inside new attributes, respectively named “name”,
**“legs” and “type”. You will need to create a getter for each of this attributes.
**Even though accidents could happen, we are generous Gods (well, at least, I am!) and will consider that our
**animals will never lose a leg after creation (And also, because I love cats), that’s why there is no setter for
**this attribute. For the other you will need to think about it yourself, because there are some logical reasons
**for it.
**Be careful, the getter for “type” is a bit tricky, you will need to make it work like in this example (and guess
**for the others cases).
**All those parameters are mandatory.
**Finally, but not least, during its creation out Animal will say:
**∇
**Terminal
**- + x
**My name is [name] and I am a [type]!
*/

    class Animal
{
    const MAMMAL = 0;
    const FISH = 1; 
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;
    
    public function __CONSTRUCT($name, $legs, $type)
    {
    $this->name=$name;
    $this->legs=$legs;
    $this->type=$type;

    echo "My name is " . $this->name . " and I am a " . $this->getType() . "!\n";
    }

    public function getName()
    {    
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getType()
    {

        if($this->type==0)
        { 
           return "mammal";
        }
        if($this->type==2)
        {
            return "bird";
        }
        else if($this->type==1)
        {
            return "fish";
        }
    }
}


//$isidore = new Animal("Isidore", 4, Animal::MAMMAL);
//echo  $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a **". $isidore->getType() . ".\n";
//$jeanjean= new Animal("Jean-Jean", 0, Animal::FISH);
//echo  $jeanjean->getName() . " has " . $jeanjean->getLegs() . " legs and is a **" . $jeanjean->getType() . ".\n";
//$gertrude= new Animal("Gertrude", 2, Animal::BIRD);
//echo  $gertrude->getName() . " has " . $gertrude->getLegs() . " legs and is a **" . $gertrude->getType() . ".\n";


 
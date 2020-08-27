<?php

/*Exercise 04
**3pt
**Turn in: pool_php_d06/ex_04/IUnit.php
**pool_php_d06/ex_04/AMonster.php
**pool_php_d06/ex_04/ASpaceMarine.php
**Restrictions: None
**Copy your interface from the previous exercise. Now we will actually implement the base of our Monsters and our
**SpaceMarines. Those two classes must be Abstract class.
**For both classes you must create three attributes, a “name”, “hp”, and “ap”. The first one will be the name of the
**unit and the second will be its health points, finally the third one will be “Action points”, the resource that our unit
**will use to make an action. Those attributes must have a getter without setter (getName, getHp and getAp). The
**name will be given during the construction of the unit, however the base hp will depend on the type of the unit so we
**actually don’t know it yet, so let’s simply initiate it to 0 for now. It will be the same for AP, so let’s put it to 0 too for now.
**For AMonster, you will add an attribute “damage” and its getter “getDamage”, it will be set to 0 for now and will
**be set later for each monsters, you will also add an attribute “apcost” that will also be set to 0 for now.
**equip: A call to this function will display “Monsters are proud and fight with their own bodies.”
**attack: If the parameter given is not implementing IUnit you will need to throw an exception saying:
**Error in AMonster . Parameter i s not an IUnit .
**without newline because once again it’s an Exception. You don’t have to handle the case where no parameter is given.
**All monsters will be of melee type, which means that they first need to get in melee range (see moveCloseTo method)
**before being able to attack their target, so if the monster is not in melee range of the Unit passed as parameter you
**will display
**[ name ] : I ’m too far away from [ target ’ s name ] .
**Where [name] should be replaced by the name of the monster and [target’s name] by its target’s name.
**If our monster is in range, it will then check if it has enough AP to attack, that’s when its attributes “ap” and “ap-
**cost” matters. To be able to attack it should have more “ap” available than the “apcost” of an attack.
**If the attack succeed you must deduce “apcost” from “ap” and call the method “receiveDamage” of the target while
**passing as parameter the “damage” of the monster, and you should display before calling receiceDamage:
**[ name ] attacks [ target ’ s name ] .
**Where [name] should be replaced by the name of the monster and [target’s name] by its target’s name.
**4receiveDamage: This function will always receive an integer representing the damage received by the monster. There
**is no error to handle. The HP of the monster must be deduced by this amount, however if the HP get to 0 or un-
**der this monster will be considered as dead and each of its method should return false from now on (except the getter).
**moveCloseTo: If the parameter received is not an IUnit, you will throw the same exception message as in “attack”.
**This function will make the monster move closer to its target, which means that a later call to “attack” will succeed.
**We will consider that the monster can only be close to one target at a time.
**If the monster is not already close to its target a call to this function will display:
**[ name ] is moving closerto [ target ’ s name ] .
**Where [name] should be replaced by the name of the monster and [target’s name] by its target’s name.
**recoverAP: a call to this method will increase the “ap” of the monster by 7 at most. It should never go over 50.
**The ASpaceMarine will be fully created in the following exercise, as of now it should just have what has been speci-
**fied at the beginning of this exercise, and all the methods of the interface should be empty (it should be possible to
**instantiate an ASpaceMarine as of now, it juste won’t have all functionalities yet) =D
***/


include_once("ASpaceMarine.php");
include_once("IUnit.php");

abstract class AMonster implements IUnit
{
    protected $name;
    protected $hp; //Health points
    protected $ap; //Action points
    protected $damage;
    protected $apcost;
    protected $closeto;

    public function __construct($name,$hp=0,$ap=0,$damage=0)
    {
        $this->hp=$hp;
        $this->ap=$ap;
        $this->name=$name;
        $this->damage=0;
        $this->apcost=0;
    }

    public function equip($param=NULL)
    {
        if($this->hp<=0)
        return false;
        
        echo "Monsters are proud and fight with their own bodies.\n";
    }

    public function attack($unit)
    {
        if($this->hp<=0)
        return false;

        if(!($unit instanceof IUnit))
        {
            throw new Exception('Error in AMonster. Parameter is not an IUnit.');
        }
        else
        {
            if($this->closeto == $unit && $this->ap>$this->apcost && $this!==$unit)
            {
                $this->ap -= $this->apcost;
                echo $this->name . " attacks " . $unit->getName() . ".\n";
                $unit->receiveDamage($this->damage);
            }
            else if ($this!==$unit)
            {
                echo $this->name . ": I'm too far away from " . $unit->getName() . ".\n";
            }
        }
    }

    public function receiveDamage($damage)
    {
        if($this->hp<=0)
        return false;

        if(is_int($damage))
        {
            $this->hp -= $damage;
        }
    }

    public function moveCloseTo($unit)
    {
        if($this->hp<=0)
        return false;

        if(!($unit instanceof IUnit))
        {
            throw new Exception('Error in AMonster. Parameter is not an IUnit.');
        }
        else if($this!==$unit AND $this->closeto!=$unit)
        {
            $this->closeto=$unit;
            echo $this->name . " is moving closer to " . $unit->getName() . ".\n";
        }
    }

    public function recoverAP()
    {

        if($this->hp<=0)
        return false;

        $this->ap += 7;
        $this->ap = max($this->ap,50);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getAp()
    {
        return $this->ap;
    }

    public function getDamage()
    {
        return $this->damage;
    }
}


//$plasmaRifle = new PlasmaRifle('Plasma Rifle');
//$powerFist = new PowerFist('Power Fist');

//echo $hp->getHp()."\n";
//echo $damage->getDamage()."\n";
//echo $ap->getAp()."\n";
//echo $->attack();
//echo $->isMelee()."\n";
//
//echo $->getName()."\n";
//echo $->getDamage()."\n";
//echo $->getApcost()."\n";
//echo $->attack();
//echo $->isMelee()."\n";
    

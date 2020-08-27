<?php

/*_ EXERCISE_ 05
**_ _ (3PT)
**_____
**Turn in: pool_php_d06/ex_05/IUnit.php
**pool_php_d06/ex_05/AMonster.php
**pool_php_d06/ex_05/ASpaceMarine.php
**pool_php_d06/ex_05/AWeapon.php
**pool_php_d06/ex_05/PlasmaRifle.php
**pool_php_d06/ex_05/PowerFist.php
**Restrictions: None
**Copy Your classes from the previous exercise.
**Let’s continue the creation of our ASpaceMarine class. It should already have a few attributes.
**Let’s add an attribute “weapon” and its getter “getWeapon”
**equip: The parameter received must be an “AWeapon”, otherwise you will need to throw an exception with
**the following message:
**
**Error in ASpaceMarine. Parameter is not an AWeapon.
**without newline because once again it’s an Exception. You don’t have to handle the case where no param-
**eter is given.
**Our SpaceMarine needs to take this new weapon and equip it. If it’s done successfully, you will display:
**
**[name] has been equipped with a [weapon’s name].
**Where [name] should be replaced by our SpaceMarine’s name and [weapon’s name] by the weapon’s name.
**If the weapon has already been taken by another SpaceMarine the function will do nothing. It’s up to you
**to decide how you will handle this.
**attack: If the parameter given is not implementing IUnit, you will need to throw an exception saying:
**
**Error in ASpaceMarine. Parameter is not an IUnit.
**without newline because . . . It’s an Exception. You don’t have to handle the case where no parameter is
**given.
**If our SpaceMarine doesn’t have any weapon equipped he will say:
**
**[name]: Hey, this is crazy. I’m not going to fight this empty handed.
**
**Where [name] should be replaced by our SpaceMarine’s name and the function will do nothing else.
**7If the weapon equipped is a melee one and our SpaceMarine is not in range, it will say:
**
**[name]: I’m too far away from [target’s name].
**
**Where [name] should be replaced by our SpaceMarine’s name and [target’s name] by its target’s name.
**Like in AMonster, our SpaceMarine will need enough AP to attack. If his available AP are at least equal to its
**weapon’s cost and he is in range (or is using a ranged weapon), you will need to call the “attack” method of
**the weapon equipped but also the target’s receivedDamage method while passing the weapon’s damage
**as parameter.
**Moreover, if the attack has been successful, you should deduce the weapon’s cost to the SpaceMarine’s
**AP and you should display before the call to receivedDamage:
**
**[name] attacks [target’s name] with a [weapon’s name].
**Where [name] should be replaced by our SpaceMarine’s name, [target’s name] by its target’s name and
**[weapon’s name] by the equipped weapon’s name.
**receivedDamage: This function will work exactly like the AMonster one.
**moveCloseTo: This function will work exactly like the AMonster one.
**recoverAP: This function will work exactly like the AMonster one, except that it will rcover 9 AP instead of 7.
*/


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
            if($this->closeto==$unit && $this->ap>$this->apcost && $this!==$unit)
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
    

<?php

/*Exercise 01___4pt
**Turn in: pool_php_d06/ex_01/AWeapon.php
**Restrictions: None.
**Create an abstract class “AWeapon” with the following attribute :
**• name (a string), the name of the weapon.
**• apcost (an integer), the action point cost to use the weapon.
**• damage (an integer), the number of damage dealt by the weapon.
**• melee (a boolean), representing if the weapon is use for close combat or not.
**These attributes will have getter (getName, getApcost, getDamage, isMelee) but no setter.
**The constructor of this class will take the name, the apcost and the damage in the following order. If one of the
**parameter is not of the good type, you will throw an exception with the following message:
**Error in AWeapon constructor. Bad parameters .
**Because it is an exception message there should be no newline at the end of this message.
**You do not have to handle missing parameters.
**By default melee will be false.
**You will also add an abstract public method named “attack”.
**Example :
**<? php
**include  once ( "AWeapon . php " ) ;
**new AWeapon ( ) ;
**
**Terminal
**∼/pool_php_d06> php index.php
**PHP Fatal error: Cannot instantiate abstract class AWeapon in /home/gecko/rendu/pool_php_d06/ex_01/ind
**on line 5
**∼/pool_php_d06>
**This error means that to test, you will need to create a new class =P.
*/

abstract class AWeapon
{
    protected $name;
    private $apcost;
    private $damage;
    private $melee = false;

    public function __construct($name, $apcost, $damage)
    {

        if(!is_string($name) || (!(is_int($apcost))) || (!(is_int($damage))))
        {
            throw new exception ("Error in AWeapon constructor. Bad parameters.");
        }
        $this->name=$name;
        $this->apcost=$apcost;
        $this->damage=$damage;
    }

    public function getName()
    {
    return $this->name;
    }

    public function getApcost()
    {
    return $this->apcost;
    } 

    public function isMelee()
    {
        return $this->melee;
    }

    public function getDamage()
    {
    return $this->damage;
    }
  
    abstract public function attack();
}

// class test extends AWeapon
// {
  // public function attack()
  // {
    // $weapon = new test("arme", 4 , 5);
//  
    // echo $weapon->getName();
  // }
// }

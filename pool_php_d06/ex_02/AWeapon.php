<?php

/*Exercise 02___2pt
**Turn in: pool_php_d06/ex_02/AWeapon.php
**pool_php_d06/ex_02/PlasmaRifle.php
**pool_php_d06/ex_02/PowerFist.php
**Restrictions: None.
**Here are the features of the different class inheriting from “AWeapon” that you must create:
**• PlasmaRifle :
**– Name : “Plasma Rifle”
**– Damage : 21
**– AP cost : 5
**– Output of attack() : “PIOU”
**– Not Melee
**• PowerFist :
**– Name : “Power Fist”
**– Damage : 50
**– AP cost : 8
**– Output of attack() : “SBAM”
**– Melee
**The call to attack() must display the output of the weapon followed by a newline
*/

    include_once ("PlasmaRifle.php");
    include_once ("PowerFist.php");
    abstract class AWeapon
    {
        protected $name;
        protected $apcost;
        protected $damage;
        private $melee = false;

        public function __construct($nom,$apcost,$damage,$melee=false)
        {
            if(is_string($nom)&&is_int($apcost)&&is_int($damage))
            {
                $this->name=$nom;
                $this->apcost=$apcost;
                $this->damage=$damage;
                $this->melee=$melee;
            }
            else
            {
                throw new Exception("Error in AWeapon constructor. Bad parameters.");
            }
        }

        public function getName()
        {
            return $this->name;
        }
        public function getApcost()
        {
            return $this->apcost;
        }
        public function getDamage()
        {
            return $this->damage;
        }
        public function isMelee()
        {
            return $this->melee;
        }

        abstract public function attack();
    }
    //new AWeapon();

// $plasmaRifle = new PlasmaRifle('Plasma Rifle');
// $powerFist = new PowerFist('Power Fist');
// 
// echo $plasmaRifle->getName()."\n";
// echo $plasmaRifle->getDamage()."\n";
// echo $plasmaRifle->getApcost()."\n";
// echo $plasmaRifle->attack();
// echo $plasmaRifle->isMelee()."\n";
// 
// echo $powerFist->getName()."\n";
// echo $powerFist->getDamage()."\n";
// echo $powerFist->getApcost()."\n";
// echo $powerFist->attack();
// echo $powerFist->isMelee()."\n";
    


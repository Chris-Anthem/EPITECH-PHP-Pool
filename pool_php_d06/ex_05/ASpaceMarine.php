<?php

include_once("AMonster.php");
include_once("IUnit.php");

abstract class ASpaceMarine implements IUnit
{
    protected $name;
    protected $hp; //Health points
    protected $ap; //Action points
    protected $weapon;

    public function __construct($name,$hp=0,$ap=0)
    {
        $this->hp=$hp;
        $this->ap=$ap;
        $this->name = $name;
    }

    public function equip($AWeapon){}
    public function attack($param){}
    public function receiveDamage($param){}
    public function moveCloseTo($param){}
    public function recoverAP(){}
    public function getWeapon(){}


    public function equip($AWeapon)
    {
        if ($this->weapon !== $AWeapon)
        {
            throw new Exception('Error in ASpaceMarine. Parameter is not an AWeapon.');
        }
        else
        {
            echo $this->name . " has been equipped with a " . $this->getWeapon() . ".\n";
        }

    public function getWeapon()
    {
        return $this->weapon;
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
}
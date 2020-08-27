<?php

include_once('Character.php');
include_once('Mage.php');

class Warrior extends Character
{

protected $name;
protected $life;
protected $agility;
protected $strength;
protected $wit;

const CLASSE =  self::class;

    public function __CONSTRUCT($nom)
    {
        $this->name=$nom;
        $this->life=100;
        $this->agility=10;
        $this->strength=8;
        $this->wit=3;
        echo "$this->name: I'll engrave my name in history!\n";
    }
    public function getName()
    {
        return $this->name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function getAgility()
    {   
        return $this->agility;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getWit()
    {
        return $this->wit;
    }
    public function getClasse()
    {
        return self::CLASSE;
    }
    public function attack()
    {
        echo  "$this->name: I'll crush you with my hammer!\n";
    }

    public function __DESTRUCT()
    {
        echo "$this->name: Aarrg I can't believe I'm dead...\n";
    }
}


// $perso = new Warrior("Jean-Luc");
// echo $perso ->getName()."\n";
// echo $perso ->getLife()."\n";
// echo $perso ->getAgility()."\n";
// echo $perso ->getStrength()."\n";
// echo $perso ->getWit()."\n";
// echo $perso ->getClasse()."\n";

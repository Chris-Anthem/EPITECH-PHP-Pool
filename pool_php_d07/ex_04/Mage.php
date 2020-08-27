<?php

include_once('Character.php');
include_once('Warrior.php');

class Mage extends Character
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
        $this->life=70;
        $this->agility=10;
        $this->strength=3;
        $this->wit=10;
        echo "$this->name: May the gods be with me.\n";
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
        echo  "$this->name: Feel the power of my magic!\n";
    }

    public function moveRight()
    {
        echo "$this->name: moves right furtively.\n";
    }

    public function moveLeft()
    {
        echo "$this->name: moves left furtively.\n";
    }

    public function moveUp()
    {
        echo "$this->name: moves up furtively.\n";
    }

    public function moveDown()
    {
        echo "$this->name: moves down furtively.\n";
    }

    public function __DESTRUCT()
    {
        echo "$this->name: By the four gods, I passed away...\n";
    }
}
/*
$perso = new Mage("Robert");
echo $perso ->moveRight()."\n";
echo $perso ->moveDown()."\n";
echo $perso ->moveUP()."\n";
echo $perso ->getStrength()."\n";
echo $perso ->getWit()."\n";
echo $perso ->getClasse()."\n";
*/

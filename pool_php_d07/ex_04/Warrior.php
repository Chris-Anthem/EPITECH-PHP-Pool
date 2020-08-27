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

    public function moveRight()
    {
        echo "$this->name: moves right like a bad boy.\n";
    }

    public function moveLeft()
    {
        echo "$this->name: moves left like a bad boy.\n";
    }

    public function moveUp()
    {
        echo "$this->name: moves up like a bad boy.\n";
    }

    public function moveDown()
    {
        echo "$this->name: moves down like a bad boy.\n";
    }

    public function __DESTRUCT()
    {
        echo "$this->name: Aarrg I can't believe I'm dead...\n";
    }
}

// $perso = new Warrior( 'Jean-lu');
// echo $perso ->moveRight()."\n";
// echo $perso ->moveLeft()."\n";
// echo $perso ->moveUp()."\n";
// echo $perso ->moveDown()."\n";
// echo $perso ->getWit()."\n";
// echo $perso ->getClasse()."\n";
// 
// $warrior = new Warrior('Jean-Luc');
// $warrior->moveRight();
// $warrior->moveLeft();
// $warrior->moveUp();
// $warrior->moveDown();
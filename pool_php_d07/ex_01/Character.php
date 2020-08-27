<?php

/* EXERCICE 1 _ (1 PT)
_____
Hand in: pool_php_d07/ex_01/Character.php
Create a class “Character” composed of the protected attributes “name”, “life”, “agility”, “strength”, “wit”, and
a constant attribute “CLASSE” and the corresponding getters.
These attributes will have the following values:
- name = argument passed to constructor
- life = 50
- agility = 2
- strength = 2
- wit = 2
*/

class Character
{
protected $name;
protected $life;
protected $agility;
protected $strength;
protected $wit;

const CLASSE = self::class;

    public function __CONSTRUCT($nom)
    {
    $this->name=$nom;
    $this->life=50;
    $this->agility=2;
    $this->strength=2;
    $this->wit=2;
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
}
/*
$perso = new Character("Jean-Luc");
echo $perso ->getName()."\n";
echo $perso ->getLife()."\n";
echo $perso ->getAgility()."\n";
echo $perso ->getStrength()."\n";
echo $perso ->getWit()."\n";
echo $perso ->getClasse()."\n";
*/
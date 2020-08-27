<?php

/*_ EXERCICE 3 _(1 PT)
**_____
**Hand in: pool_php_d07/ex_03/Character.php
**pool_php_d07/ex_03/Warrior.php
**pool_php_d07/ex_03/Mage.php
**pool_php_d07/ex_03/IMovable.php
**In this exercise, you will reuse the classes of the previous exercises. Please copy them in your folder.
**We now have characters which can be mages or warriors. They can attack, fair enough, but they still cannot
**move! This is bothersome. In order to add this behavior to our classes, we are going to create an interface
**“IMovable” that will contain the following methods: “moveRight”, “moveLeft”, “moveUp” and “moveDown”.
**You will then implement this interface to the class “Character”.
**Your methods will, respectively, display the following message:
**- moveRight -> “[NAME]: moves right.” followed by a new line.
**- moveLeft -> “[NAME]: moves left.” followed by a new line.
**- moveUp -> “[NAME]: moves up.” followed by a new line.
**- moveDown -> “[NAME]: moves down.” followed by a new line.
*/

include_once('IMovable.php');

class Character implements IMovable
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

    public function moveRight()
    {
        echo $this->name,": moves right.\n";
    }

    public function moveLeft()
    {
        echo $this->name,": moves left.\n";
    }

    public function moveUp()
    {
        echo $this->name,": moves up.\n";
    }

    public function moveDown()
    {
        echo $this->name,": moves down.\n";
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

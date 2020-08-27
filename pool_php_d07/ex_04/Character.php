<?php

/*EXERCICE 4 (1 PT)
**_____
**Hand in: pool_php_d07/ex_03/Character.php
**pool_php_d07/ex_04/Warrior.php
**pool_php_d07/ex_04/Mage.php
**pool_php_d07/ex_04/IMovable.php
**Paralysis is over! Our characters can now move but, being so proud, they want more! Our friend Warrior
**refuses to be compared to a small and skinny Mage. While the Warrior moves in a bold and virile manner,
**the Mage moves delicately! To satisfy our boorish Warrior, you will implement overrides for the methods
**“IMovable” inherited by “Character”.
**Thus, your methods will display the following messages corresponding to the class that overrides them:
**Warrior:
**- moveRight->“[NAME]: moves right like a bad boy.” followed by a new line.
**- moveLeft->“[NAME]: moves left like a bad boy.” followed by a new line.
**- moveUp->“[NAME]: moves up like a bad boy.” followed by a new line.
**- moveDown->“[NAME]: moves down like a bad boy.” followed by a new line.
**Mage:
**- moveRight -> “[NAME]: moves right furtively.” followed by a new line.
**- moveLeft -> “[NAME]: moves left furtively.” followed by a new line.
**- moveUp -> “[NAME]: moves up furtively.” followed by a new line.
**- moveDown -> “[NAME]: moves down furtively.” followed by a new line.
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

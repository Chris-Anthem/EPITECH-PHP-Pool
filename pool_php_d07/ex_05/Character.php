<?php

/*_ EXERCICE 5 (1 PT)
**_____
**Hand in: pool_php_d07/ex_05/Character.php
**pool_php_d07/ex_05/Warrior.php
**pool_php_d07/ex_05/Mage.php
**pool_php_d07/ex_05/IMovable.php
**Now our characters can talk, walk and attack in a customized way. Yet, they still cannot unsheathe their
**weapon! Being able to attack is nice, but attacking while the weapon is still in its sheath is going to be diffi-
**cult. . .
**You will agree that, whether Warrior or Mage, the character will draw his weapon the same way. This is
**why you will make sure that the class “Character” implements the method “unsheathe” so that
**“Warrior” and “Mage” inherits from it. However, you will also make sure that the method “unsheathe” can-
**not be overrided by “Warrior” and “Mage”.
**This method will display the following text when it is called: “[NAME]: unsheathes his weapon.”
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

    final public function unsheathe()
    {
        echo $this->name, ": unsheathes his weapon.\n";
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

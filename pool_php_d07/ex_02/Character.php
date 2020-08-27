<?php

/* EXERCICE 2  (1_PT)
**_____
**Hand in: pool_php_d07/ex_02/Character.php
**pool_php_d07/ex_02/Warrior.php
**pool_php_d07/ex_02/Mage.php
**Copy the code of the previous exercise and create the class “Warrior” as well as a class “Mage” which inherits
**from “Character”.
**You will modify the attributes (that have been inherited from the class “Character”) of each class in the
**following manner:
**Warrior:
**- CLASSE = “Warrior”
**- life = 100
**- agility = 10
**- strength = 8
**- wit = 3
**Mage:
**- CLASSE = “Mage”
**- life = 70
**- agility = 10
**- strength = 3
**- wit = 10
**These two classes will each implement a method “attack” that takes no parameter.
**The method “attack” of class “Warrior” will display: “[NAME]: I’ll crush you with my hammer!” followed
**by a new line.
**The method “attack” of class “Mage” will display: “[NAME]: Feel the power of my magic!” followed by a
**new line.
**[NAME] will of course be replaced by the name of your character.
**Our characters are proud and they like to announce themselves on the battlefield. You will make sure that,
**when creating an object “Warrior” or “Mage”, a message will be written in the following format:
**- Warrior: “[NAME]: I’ll engrave my name in history!” followed by a new line.
**- Mage: “[NAME]: May the gods be with me.” followed by a new line.
**3Even though they are powerful and proud, our characters can die. Upon destruction of one of the
**two objects, you will have to display the following message:
**- Warrior: “[NAME]: Aarrg I can’t believe I’m dead. . . ” followed by a new line.
**- Mage: “[NAME]: By the four gods, I passed away. . . ” followed by a new line
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

//$perso = new Character("Suzanne");
//echo $perso ->getName()."\n";
//echo $perso ->getLife()."\n";
//echo $perso ->getAgility()."\n";
//echo $perso ->getStrength()."\n";
//echo $perso ->getWit()."\n";
//echo $perso ->getClasse()."\n";


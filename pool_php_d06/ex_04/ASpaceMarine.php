<?php

include_once("AMonster.php");
include_once("IUnit.php");

abstract class ASpaceMarine implements IUnit
{
    protected $name;
    protected $hp; //Health points
    protected $ap; //Action points

    public function __construct($name,$hp=0,$ap=0)
    {
        $this->hp=$hp;
        $this->ap=$ap;
        $this->name = $name;
    }

    public function equip($param){}
    public function attack($param){}
    public function receiveDamage($param){}
    public function moveCloseTo($param){}
    public function recoverAP(){}

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
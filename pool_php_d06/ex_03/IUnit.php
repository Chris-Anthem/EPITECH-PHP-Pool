<?php

/*Exercise 03___2pt
**Turn in: pool_php_d06/ex_03/IUnit.php
**Restrictions: None.
**Let’s create our first interface. It will be called IUnit.
**This interface will be used to determine the base methods that we want our units to implement when they are created.
**You must add a few methods to this interface as to do that:
**•
**A public method equip, which will take a parameter.
**A public method attack, which will take a parameter.
**A public method receiveDamage, also taking a parameter.
**A public method moveCloseTo, also taking a parameter.
**A public method recoverAP, taking no parameter.
*/

interface IUnit

{
    public function equip($equip);
    public function attack($attack);
    public function receiveDamage($receiveDamage);
    public function moveCloseTo($moveCloseTo);
    public function recoverAP();
}


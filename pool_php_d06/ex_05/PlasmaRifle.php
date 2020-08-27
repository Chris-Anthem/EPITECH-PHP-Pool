<?php
    include_once ("AWeapon.php");
    class PlasmaRifle extends AWeapon
    {
        public function __construct()
        {
            parent::__construct("Plasma Rifle",$apcost=5,$damage=21, $melee=false);
        }

        public function attack()
        {
            echo "PIOU\n";
        }
    }
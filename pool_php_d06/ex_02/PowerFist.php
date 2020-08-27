<?php
    include_once ("AWeapon.php");
    class PowerFist extends AWeapon
    {
        public function __construct()
        {
            parent::__construct("Power Fist",$apcost=8,$damage=50, $melee=true); 
        }

        public function attack()
        {
            echo "SBAM\n";
        }
    }
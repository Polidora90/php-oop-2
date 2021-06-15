<?php

require_once(__DIR__. "./user.php");

class PremiumUser extends User {
    public $premiumDiscount;

    public function setPremiumDiscount() {
        $this->premiumDiscount = 0.2;
    }

    public function getPremiumDiscount() {
        return $this->premiumDiscount; 
    }
}

?>
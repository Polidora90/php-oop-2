<?php

require_once(__DIR__. "./user.php");

class PremiumUser extends User {
    protected $premiumDiscount = 0.2;
    protected $subscritionDate;
    protected $shippingCost = 0;

    function __construct($subscritionDate, $name, $surname, $street, $number, $city, $cap) {
        parent::__construct($name, $surname, $street, $number, $city, $cap);

        $this->subscritionDate = $subscritionDate;
        
    }

    public function setPremiumDiscount($value) {
        //condizione: non minore di 0.2
        $this->premiumDiscount = $value;
    }

    public function getPremiumDiscount() {
        return $this->premiumDiscount; 
    }

    public function setSubsctriptionDate($value) {
        $this->subscritionDate = $value;
    }

    public function getSubsctriptionDate() {
        return $this->subsctriptionDate; 
    }

    public function setShippingCost($value) {
        $this->shippingCost = $value;
    }

    public function getShippingCost() {
        return $this->shippingCost; 
    }
}

?>
<?php

class CreditCard {
    private $cardCode;
    private $owner;

    function __construct($cardCode, $name, $surname){
        $this-> setCardCode($cardCode);
        $this-> setOwner($name, $surname);
    }

    public function setOwner($name, $surname) {
        $this->owner = $name . " " . $surname;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setCardCode($value) {
        $this->cardCode = $value;
    }

    public function getCardCode() {
        return $this->cardCode;
    }
}

?>
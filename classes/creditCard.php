<?php

class CreditCard {
    public $cardCode;
    public $owner;

    public function setOwner($name, $surname) {
        $this->owner = $name . " " . $surname;
    }

    public function getOwner() {
        return $this->owner;
    }
}

?>
<?php

class CreditCard {
    private $cardCode;
    private $owner;

    public function setOwner($name, $surname) {
        $this->owner = $name . " " . $surname;
    }

    public function getOwner() {
        return $this->owner;
    }
}

?>
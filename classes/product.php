<?php

class Product {
    public $title;
    public $price;
    public $description;
    public $quantity;
    public $discount;

    public function setName($value) {
        //controllo: si possono escludere caratteri indesiderati
        $this->name = $value;
        
    }

    public function getName() {
        return $this->name;
    }

    public function setPrice($value) {
        //controlla che sia formato da cifre
        //può essere decimale o meno ma con solo 2 cifre dopo il punto
        $this->price = $value;
        
    }

    public function getPrice() {
        return $this->price;
    }

    public function setDescription($value) {
        //settare un limite di caratteri
        $this->description = $value;
        
    }

    public function getDescription() {
        return $this->description;
    }

    public function setQuantity($value) {
        //accetta solo numeri max 3 cifre
        $this->quantity = $value;
        
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setDiscount($value) {
        //accetta solo numeri, max 2 cifre
        $this->discount = $value;
        
    }

    public function getDiscount() {
        return $this->discount;
    }

}

?>
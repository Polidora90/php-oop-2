<?php

class Product {
    public $title;
    public $brand;
    public $price;
    public $description;
    public $quantity;
    public $discount;

    function __construct($title, $price, $quantity) {
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setQuantity($quantity);

    }

    public function setTitle($value) {
        //controllo: si possono escludere caratteri indesiderati
        $this->title = $value;
        
    }

    public function getTitle() {
        return $this->title;
    }

    public function setbrand($value) {
        $this->brand = $value;
        
    }

    public function getBrand() {
        return $this->brand;
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

    public function setDiscount($quantity) {
        if ($quantity > 1) {
            $this->discount = 0.1;
        } else if ($quantity > 4) {
            $this->discount = 0.3;
        } else {
            $this->discount = 0;
        }
        
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function calcPrize($price, $quantity) {
        $this->setDiscount($quantity);

        $totalPrice = ($price*$quantity) *(1 - $this->getDiscount()) ;

        return $totalPrice;
    }

}

?>
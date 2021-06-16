<?php

require_once(__DIR__. "./product.php");

class Shoes extends Product {
    public $tipologia;
    public $size;
    public $color;
    public $material;

    function __construct($title, $price, $quantity, $tipologia, $size, $color, $material){
        parent::__construct($title, $price, $quantity);
        $this-> setTipologia($tipologia);
        $this->setSize($size);
        $this->setColor($color);
        $this->setMaterial($material);
    }

    public function setTipologia($value) {
        $this->tipologia = $value;
    }

    public function getTipologia() {
        return $this->tipologia;
    }

    public function setSize($value) {
        $this->size = $value;
    }

    public function getSize() {
        return $this->size;
    }

    public function setColor($value) {
        $this->color = $value;
    }

    public function getColor() {
        return $this->color;
    }

    public function setMaterial($value) {
        $this->material = $value;
    }

    public function getMaterial() {
        return $this->material;
    }

}

?>
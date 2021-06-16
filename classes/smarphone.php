<?php

require_once(__DIR__. "./product.php");

class Smatphone extends Product {
    public $model;
    public $color;
    public $ram;

    function __construct($title, $price, $quantity, $model, $color, $ram){
        parent::__construct($title, $price, $quantity);
        $this-> setModel($model);
        $this-> setColor($color); 
        $this-> setRam($ram);
    }

    public function setModel($value) {
        $this->model = $value;
    }

    public function getModel() {
        return $this->model;
    }

    public function setColor($value) {
        $this->color = $value;
    }

    public function getColor() {
        return $this->color;
    }

    public function setRam($value) {
        $this->ram = $value;
    }

    public function getRam() {
        return $this->ram;
    }
}

?>
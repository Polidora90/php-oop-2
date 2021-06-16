<?php
class Cart {
    protected $user;
    protected $products = [];
    protected $payment;

    function __construct($user, $payment){
        $this->setUser($user);
        $this->setPayment($payment);
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function getUser() {
        return $this->user;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->user;
    }

    public function setPayment($value) {
        //condizione: accetto solo determinate stringhe
        $this->payment = $value;
    }

    public function getPayment() {
        return $this->payment;
    }
}

?>
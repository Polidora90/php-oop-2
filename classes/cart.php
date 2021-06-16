<?php

class Cart {
    protected $user;
    protected $products = [];

    public function setUser($user) {
        $this->user = $user;
    }

    public function getUser() {
        return $this->user;
    }

    public function setProducts($user) {
        $this->user = $user;
    }

    public function getProducts() {
        return $this->user;
    }
}

?>
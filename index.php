<?php

require_once("./classes/product.php");
require_once("./classes/user.php");
require_once("./classes/cart.php");
require_once("./classes/creditCard.php");
require_once("./classes/payment.php");



$prodottoTest = new Product("Samsung qualcosa", 799.00, 2);

var_dump($prodottoTest);
echo $prodottoTest->calcPrice($this->$price, 1);

$myUser = new PremiumUser("2021-06-16", "Antonella", "Elia", "Marconi", "10/d", "Verona", "37042");

$userCart = new Cart($myUser, "paypal");


?>
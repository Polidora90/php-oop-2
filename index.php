<?php

require_once("./classes/product.php");
require_once("./classes/user.php");


$prodottoTest = new Product("Samsung qualcosa", "799.00", 2);

var_dump($prodottoTest);
echo $prodottoTest->calcPrize(799.00, 1);



?>
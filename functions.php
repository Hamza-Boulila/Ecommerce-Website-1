<?php

//require MySQL connection
require('database/DBController.php');

//require Product class

require('database/Product.php');

//require Cart class

require('database/Cart.php');

// DBController Object
$db = new DBController();

//product Object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart Object
$Cart = new Cart($db);

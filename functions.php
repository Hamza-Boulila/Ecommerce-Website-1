<?php

//require MySQL connection
require('database/DBController.php');

//require Product class

require('database/Product.php');

// DBController Object
$db = new DBController();

//product Object
$product = new Product($db);

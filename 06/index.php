<?php
require __DIR__ . '/Product.php';

error_reporting(error_level: -1);

$phone = new Product(price:  1000);
$book = new Product('book',100);
var_dump($phone);
var_dump($book);

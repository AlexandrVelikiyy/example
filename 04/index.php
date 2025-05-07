<?php
require __DIR__ . '/Product.php';

error_reporting(error_level: -1);

$phone = new Product();
//echo $phone->sayHello();
$phone->price = 1000;
//var_dump($phone);
var_dump($phone->getRealPrice());
$book = new Product();
$book->price = 700;
var_dump($book->getRealPrice('EUR'));

<?php
require __DIR__ . '/Product.php';

error_reporting(error_level: -1);

$phone = new Product();
$phone->title = 'Phone';
$phone->price = '100';
//$phone->tit = 'unknown';
$phone->cpu = 'some cpu';
var_dump($phone);

$book = new Product();
$book->title = 'book';
$book->price = 20.6;
var_dump($book->title);

<?php

require __DIR__ . '/Product.php';
require __DIR__ . '/Book.php';
require __DIR__ . '/Phone.php';
error_reporting(-1);
$phone = new Phone('Phone', 10000,cpu: 'MediaTek');
$book = new Book('Book', 5000,100);

//var_dump($phone);
var_dump($book);
var_dump($phone);

echo $book->info();
echo $phone->info();

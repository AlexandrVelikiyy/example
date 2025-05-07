<?php
error_reporting(-1);

require __DIR__ . '/Card.php';
require __DIR__ . '/Product.php';
$product2 = new Product('Some product2', 2000);;
$product = new Product('Some product', 1000);

$card = new Card();
//echo $card->add(['title'=> 'Product1', 'price'=> 10]) ->getTotal() . PHP_EOL;
//echo $card->add(['title'=> 'Product2', 'price'=> 10]) ->getTotal() . PHP_EOL;
echo $card->add($product) ->getTotal() . PHP_EOL;
echo $card->add($product2) ->getTotal() . PHP_EOL;
//var_dump($card);
var_dump($card->getTotal());
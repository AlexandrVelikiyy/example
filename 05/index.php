<?php
error_reporting(-1);

require __DIR__ . '/Card.php';

$card = new Card();
echo $card->add(['title'=> 5, 'price'=> 10]) ->getTotal() . PHP_EOL;
echo $card->add(['title'=> 10, 'price'=> 15]) ->getTotal() . PHP_EOL;
echo $card->add(['title'=> 15, 'price'=> 20]) ->getTotal() . PHP_EOL;
//var_dump($card);
var_dump($card->getTotal());
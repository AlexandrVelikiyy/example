<?php
require __DIR__ . '/Card.php';

error_reporting(-1);

$card = new Card();
echo $card->add(['title'=>"phone1",'price'=>100])->getTotalPrice() . PHP_EOL;
echo $card->add(['title'=>"phone2",'price'=>200])->getTotalPrice() . PHP_EOL;
echo $card->add(['title'=>"phone3",'price'=>300])->getTotalPrice() . PHP_EOL;
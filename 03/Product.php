<?php

#[AllowDynamicProperties]
class Product
{
    public ?string $title = 'some product';
    public int|float $price;
}

$product = new Product();
var_dump($product);
<?php

class Product
{
//    public ?string $title;
//    public int $price;

//    public function __construct(string $title  = 'some product',int $price = 5)
//    {
//        $this->title = $title;
//        $this->price = $price;
//        //echo "Hello from class\n";
//    }
public function __construct(
    public string $title,
    public int $price
)
{
}

    public function getRealPrice($currency = '$'):string
    {
       return  "{$currency}" . $this->price/100;
    }

}


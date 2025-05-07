<?php

class Product
{
    public string $title;
    public int $price;
//    public string $cpu;
//    public int $num_pages;
public function __construct(
  string $title,
     int $price
)
{
    $this->title = $title;
    $this->price = $price;
//    $this->cpu = '';
//    $this->num_pages = 0;
}
    public function getRealPrice($currency = '$'):string
    {
       return  "{$currency}" . $this->price/100;
    }

    public function info():string
    {
        return "\nABOUT PRODUCT:\n {$this->title} \nPrice: {$this->price} ";
    }

}


<?php

class Card
{
    public array $data = [];
    public function add(array $product): static
    {
        $this->data[] = $product;
        return $this;
    }

    public function getTotalPrice():int|float
    {
        $total = 0;
        foreach ($this->data as $item){
            $total += $item['price'];
        }
        return $total;
    }
}
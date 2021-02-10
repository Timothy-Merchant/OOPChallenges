<?php

namespace App\Shopping;

class BasketItem
{
    private $type;
    private $price;
    private $priceString;

    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }

    public function type()
    {
        return $this->type;
    }

    public function price()
    {
        return $this->price;
    }    
}

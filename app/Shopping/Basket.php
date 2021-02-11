<?php

declare(strict_types=1);

namespace App\Shopping;

class Basket
{
    private $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function add($item)
    {
        $this->items->push($item);
        return $this;
    }

    public function items()
    {
        return $this->items->map(fn ($item) => $item->type())->all();
    }

    public function total()
    {
        return $this->formatter->priceFormatted($this->items->map(fn ($item) => $item->price())->sum());
    }
}

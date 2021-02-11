<?php

namespace App\Shopping;

class Basket
{
    private $items;

    public function add($item)
    {
        $this->items[] = $item;
        return $this;
    }

    public function items()
    {
        return collect($this->items)->map(fn ($item) => $item->type())->all();
    }    

    public function total()
    {
        $formatter = new PriceFormatter();
        return $formatter->priceFormatted((collect($this->items)->reduce(fn ($acc, $item) => $acc += $item->price(), 0)));
    }
}

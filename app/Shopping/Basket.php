<?php

namespace App\Shopping;

class Basket
{
    private $items;
    private $formatter;

    public function add($item, $formatter)
    {
        $this->formatter = $formatter;
        $this->items[] = $item;
        return $this;
    }

    public function items()
    {
        return collect($this->items)->map(fn ($item) => $item->type())->all();
    }

    public function total()
    {
        return $this->formatter->priceFormatted((collect($this->items)->reduce(fn ($acc, $item) => $acc += $item->price(), 0)));
    }
}

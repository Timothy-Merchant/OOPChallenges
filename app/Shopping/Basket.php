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

    public function add(BasketItem $item): Basket
    {
        $this->items->push($item);
        return $this;
    }

    public function items(): array
    {
        return $this->items->map(fn ($item) => $item->type())->all();
    }

    public function priceFormatted(float $price): string
    {
        return "£" . number_format($price, 2, '.', ',');
    }

    public function total(): string
    {
        return $this->priceFormatted(($this->items->map(fn ($item) => $item->price())->sum()));
    }
}

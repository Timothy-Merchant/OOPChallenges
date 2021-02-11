<?php

declare(strict_types=1);

namespace App\Shopping;

class PriceFormatter
{
    public function priceFormatted(float $price): string
    {
        return "£" . number_format($price, 2, '.', ',');
    }
}

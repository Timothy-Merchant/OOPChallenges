<?php

declare(strict_types=1);

namespace App\Shopping;

class PriceFormatter
{
    public function priceFormatted($item)
    {
        return "£" . number_format($item, 2, '.', ',');
    }
}

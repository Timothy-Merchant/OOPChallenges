<?php

namespace App\Shopping;

class PriceFormatter
{
    public function priceFormatted($item)
    {
        return "£" . number_format($item, 2, '.', ',');
    }
}

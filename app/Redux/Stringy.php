<?php

declare(strict_types=1);

namespace App\Redux;

class Stringy
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function lower()
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    public function upper()
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    public function append($stringToAppend)
    {
        $this->str .= $stringToAppend;
        return $this;
    }

    public function repeat($total)
    {
        $this->str = str_repeat($this->str, $total);
        return $this;
    }

    public function get()
    {
        return $this->str;
    }
}

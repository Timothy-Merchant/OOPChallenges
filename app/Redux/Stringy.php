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

    public function lower(): Stringy
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    public function upper(): Stringy
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    public function append(string $stringToAppend): Stringy
    {
        $this->str .= $stringToAppend;
        return $this;
    }

    public function repeat(int $total): Stringy
    {
        $this->str = str_repeat($this->str, $total);
        return $this;
    }

    public function get(): string
    {
        return $this->str;
    }
}

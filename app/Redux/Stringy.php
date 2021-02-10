<?php

namespace App\Redux;

class Stringy
{
    private $userString;

    public function __construct($userString)
    {
        $this->userString = $userString;
    }

    public function lower()
    {
        $this->userString = strtolower($this->userString);
        return $this;
    }

    public function upper()
    {
        $this->userString = strtoupper($this->userString);
        return $this;
    }

    public function append($stringToAppend)
    {
        $this->userString .= $stringToAppend;
        return $this;
    }

    public function repeat($total)
    {
        $this->userString = str_repeat($this->userString, $total);
        return $this;
    }

    public function get()
    {
        return $this->userString;
    }
}

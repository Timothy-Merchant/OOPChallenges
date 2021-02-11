<?php

declare(strict_types=1);

namespace App\Tricksy;

class SuperString
{

    public $userString;

    public function __construct($userString)
    {
        $this->userString = $userString;
    }

    public function __toString()
    {
        return $this->userString;
    }

    public function titleCase()
    {
        $this->userString = ucwords($this->userString);
        return $this;
    }

    public function append($string)
    {
        $this->userString .= $string;
        return $this;
    }
}

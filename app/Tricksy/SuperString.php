<?php

declare(strict_types=1);

namespace App\Tricksy;

class SuperString
{

    public $userString;

    public function __construct(string $userString)
    {
        $this->userString = $userString;
    }

    public function __toString(): string
    {
        return $this->userString;
    }

    public function titleCase(): SuperString
    {
        $this->userString = ucwords($this->userString);
        return $this;
    }

    public function append(string $string): SuperString
    {
        $this->userString .= $string;
        return $this;
    }
}

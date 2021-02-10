<?php

namespace App\Tricksy\Cooking;

class Ingredient
{
    private $name;
    private $dietaryInfo;

    public function __construct($name, $dietaryInfo)
    {
        $this->name = $name;
        $this->dietaryInfo = $dietaryInfo;
    }

    public function name()
    {
        return $this->name;
    }

    public function getDietary()
    {
        return $this->dietaryInfo;
    }

    public function vegan()
    {
        // Returns true if at least one of the dietaryInfo entries match the RegEx.
        return collect($this->dietaryInfo)->some(fn ($item) => preg_match('/animal produce/', $item) === 1);
    }
}
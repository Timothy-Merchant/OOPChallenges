<?php

declare(strict_types=1);

namespace App\Tricksy\Cooking;

class Ingredient
{
    private $name;
    private $dietaryInfo;

    public function __construct(string $name, array $dietaryInfo)
    {
        $this->name = $name;
        $this->dietaryInfo = $dietaryInfo;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function getDietary(): array
    {
        return $this->dietaryInfo;
    }

    public function vegan(): bool
    {
        // Returns true if at least one of the dietaryInfo entries match the RegEx.
        return collect($this->dietaryInfo)->some(fn ($item) => preg_match('/animal produce/', $item) === 1);
    }
}

<?php

declare(strict_types=1);

namespace App\Tricksy\Cooking;

class Recipe
{
    private $recipeName;
    private $method;
    private $ingredients;

    public function __construct(string $recipeName)
    {
        $this->recipeName = $recipeName;
        $this->ingredients = collect([]);
    }

    public function addIngredient(Ingredient $ingredient, int $amount): void
    {
        $this->ingredients->push([$ingredient, $amount]);
    }

    public function addMethod(string $method): void
    {
        $this->method = $method;
    }

    public function display(): string
    {
        $reportHeader = "\n{$this->recipeName}\n\nIngredients\n\n";
        $reportList = $this->ingredients->map(fn ($ingredient) => "- {$ingredient[1]} {$ingredient[0]->name()}\n", "")->join("");
        $reportMethod = "\nMethod\n\n{$this->method}\n";
        return $reportHeader . $reportList . $reportMethod;
    }

    public function dietary(): string
    {
        return implode(", ", $this->ingredients->flatMap(fn ($ingredient) => $ingredient[0]->getDietary())->unique()->values()->all());
    }

    public function vegan(): string
    {
        return count($this->ingredients->filter(fn ($ingredient) =>
        $ingredient[0]->vegan())) > 0 ? 'Not vegan friendly.' : 'Vegan friendly.';
    }
}

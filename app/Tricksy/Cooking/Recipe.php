<?php

namespace App\Tricksy\Cooking;

class Recipe
{
    private $recipeName;
    private $method;
    private $ingredients;
    private $isVegan;

    public function __construct($recipeName)
    {
        $this->recipeName = $recipeName;
        $this->ingredients = collect([]);
    }

    public function addIngredient($ingredient, $amount)
    {
        $this->ingredients->push([$ingredient, $amount]);
    }

    public function addMethod($method)
    {
        $this->method = $method;
    }

    public function display()
    {
        $ingredientsHeader = "\n{$this->recipeName}\n\nIngredients\n\n";
        $ingredientsList = $this->ingredients->map(fn ($ingredient) => "- {$ingredient[1]} {$ingredient[0]->name()}\n", "")->join("");
        $ingredientsMethod = "\nMethod\n\n{$this->method}\n";
        return $ingredientsHeader . $ingredientsList . $ingredientsMethod;
    }

    public function dietary()
    {
        return implode(", ", $this->ingredients->flatMap(fn ($ingredient) => $ingredient[0]->getDietary())->unique()->values()->all());
    }

    public function vegan()
    {
        return count(collect($this->ingredients)->filter(fn ($ingredient) =>
        $ingredient[0]->vegan())) > 0 ? 'Not vegan friendly.' : 'Vegan friendly.';
    }
}

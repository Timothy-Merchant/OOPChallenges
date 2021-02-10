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
    }

    public function addIngredient($ingredient, $amount)
    {
        $this->ingredients[] = [$ingredient, $amount];
    }

    public function addMethod($method)
    {
        $this->method = $method;
    }

    public function display()
    {
        return "\n{$this->recipeName}\n\nIngredients\n\n" . collect($this->ingredients)->reduce(fn ($acc, $ingredient) => $acc .= "- {$ingredient[1]} {$ingredient[0]->name()}\n", "") . "\nMethod\n\n{$this->method}\n";
    }

    public function dietary()
    {
        return implode(", ", collect($this->ingredients)->flatMap(fn ($ingredient) => $ingredient[0]->getDietary())->unique()->values()->all());
    }

    public function vegan()
    {
        return count(collect($this->ingredients)->filter(fn ($ingredient) =>
        $ingredient[0]->vegan())) > 0 ? 'Not vegan friendly.' : 'Vegan friendly.';
    }
}

<?php

declare(strict_types=1);

namespace App\Marsupials;

class Wombat
{

    private $name;
    private $hugs = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayHelloTo(Wombat $wombat): string
    {
        return "Hello " . $wombat->name;
    }

    public function giveHug(): Wombat
    {
        $this->hugs += 1;
        return $this;
    }

    public function howManyHugs(): int
    {
        return $this->hugs;
    }
}

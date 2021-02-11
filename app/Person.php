<?php

declare(strict_types=1);

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function sayHelloTo(Person $person): string
    {
        return "Hello " . $person->firstName;
    }
}

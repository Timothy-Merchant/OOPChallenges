<?php

declare(strict_types=1);

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function sayHelloTo($person)
    {
        return "Hello " . $person->firstName;
    }
}

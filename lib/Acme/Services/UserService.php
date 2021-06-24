<?php

namespace Acme\Services;

class UserService
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function printName(): void
    {
        echo $this->name;
    }
}

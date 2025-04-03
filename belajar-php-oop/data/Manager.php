<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    var string $title = "Vice President";

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->name, I'm $this->title" . PHP_EOL;
    }
}
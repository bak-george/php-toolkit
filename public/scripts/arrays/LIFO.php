<?php 

$callTrace = [];

function enterFunction(string $name): void
{
    global $callTrace; 
    $callTrace[] = $name;

    echo "Entering {$name} (stack: " . implode('->', $callTrace) . ")" . PHP_EOL;
}

function exitFunction(string $name): void
{
    echo "Exiting from {$name}" . PHP_EOL;

    global $callTrace; 
    array_pop($callTrace);
}

function first(): void
{
    enterFunction("first");
    exitFunction("first");
}

function second(): void
{
    enterFunction("second");
    first();
    exitFunction("second");
}

function third(): void
{
    enterFunction("third");
    second();
    first();
    exitFunction("third");
}

third();

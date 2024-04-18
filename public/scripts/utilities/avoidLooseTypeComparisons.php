<?php

//declare(strict_types=1);

function add_numbers(int $left, int $right): int
{
    return $left + $right;
}

add_numbers(2, 3);
var_dump(add_numbers(2, '3'));



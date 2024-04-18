<?php

function describe(float ...$values): array
{
    $min = min($values);
    $max = max($values);
    $mean = array_sum($values) / count($values);

    $variance = 0.0;

    foreach ($values as $val) {
        $variance += pow(($val - $mean), 2);
    }

    $std_dev = (float) sqrt($variance/count($values));

    return [$min, $max, $mean, $std_dev];
}

$values = [1.0, 9.2, 7.3, 12.0];

list($min, $max, $mean, $std) = describe(... $values);

var_dump($min, $max, $mean, $std);

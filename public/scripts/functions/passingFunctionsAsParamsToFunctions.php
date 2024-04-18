<?php 

$reducer = function(?int $carry, int $item) {
    return $carry + $item;
};

function reduce(array $array, callable $callback, ?int $initial = null): ?int 
{
    $acc = $initial;
    foreach ($array as $item) {
        $acc = $callback($acc, $item);
    }

    return $acc;
}

$list = [1,2,3,4,5];
$sum = reduce($list, $reducer, -10);

//echo 'Reducer: ' . $sum . PHP_EOL;

function multiplier(int $base): callable
{
    return function(int $subject) use ($base): int {
        return $base * $subject;
    };
}

echo "Multiplier: "; 
//var_dump(multiplier(2));

function multiply(int $x, int $y): int
{
    return $x * $y;
}

multiply(7,3); 

function curriedMultiply(int $x): callable
{
    return function(int $y) use ($x): int {
        return $x * $y;
    };
}

$curriedMultiply = curriedMultiply(10)(3);
echo $curriedMultiply;

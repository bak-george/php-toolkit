<?php

function padUniqueIdWithZeros(string $uniqueId, int $requestedChars): string
{
    return str_pad($uniqueId, $requestedChars, '0', STR_PAD_LEFT);
}

$requestedChars = 4;
$uniqueId = 'abc';

$uniqueId = padUniqueIdWithZeros($uniqueId, $requestedChars);
echo $uniqueId . PHP_EOL;


function padUniqueId(string $uniqueId, int $requestedChars, string $paddCharOrNumber) 
{
    return str_pad($uniqueId, $requestedChars, $paddCharOrNumber, STR_PAD_LEFT);
}

$requestedChars = 5;
$uniqueId = 'abc';

$uniqueId = padUniqueId($uniqueId, $requestedChars, 'here is a string');
echo $uniqueId . PHP_EOL; 

echo "//Even if you try a large string it I'll add the chars up to the 'requestedChars' variable";
<?php

$characters = [
    "Rick Sanchez",
    "Morty Smith",
    "Summer Smith",
    "Jerry Smith",
    "Beth Smith",
    "Birdperson",
    "Squanchy",
    "Mr. Meeseeks",
    "Unity"    
];

$minLength = 12;

$paddingValue = ['name' => 'Krombopulos Michael', 'quote' => 'Here I go killin again'];

$paddedCharacters = array_pad($characters, $minLength, $paddingValue);

echo "Original Character Names: " . PHP_EOL;
print_r($characters);
echo PHP_EOL;
echo "<h3><strong>Pad an Array</strong></h3>";
echo "Padded Character Names: " . PHP_EOL;
print_r($paddedCharacters);

echo "<h3><strong>Pad a string</strong></h3>";
$paddingValue = 'Mr. Golderfold';

$paddedCharacters = array_pad($characters, $minLength, $paddingValue);
echo "Padded Character Names: " . PHP_EOL;
print_r($paddedCharacters);

echo "<h3><strong>Add values in the beggining</strong></h3>";
$paddingValue = 'Mr. Golderfold';

$paddedCharacters = array_pad($characters, -10, $paddingValue);
echo "Padded Character Names: " . PHP_EOL;
print_r($paddedCharacters);

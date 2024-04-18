<?php 

$array = [
    'Bulbasaur',
    'Ivysaur',
    'Venusaur',
    'Charmander',
    'Charmeleon',
    'Charizard',
    'Squirtle',
    'Wartortle',
    'Blastoise',
    'Caterpie',
    'Metapod'
];

unset($array[2]);

print_r($array);

$array = array_values($array);

print_r($array);
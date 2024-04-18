<?php 

$first = [
    'title' => 'The Red Book of Westmarch',
    'author' => 'Bilbo Baggins',
    'year' => 3018
];
    
    $second = [
    'year' => 3023,
    'location' => 'The Shire'
];

$merged = array_merge($first, $second);
var_dump($merged);

$merged2 = [...$first, ...$second];
var_dump($merged2);


$recursiveMerge = array_merge_recursive($first, $second);
var_dump($recursiveMerge);

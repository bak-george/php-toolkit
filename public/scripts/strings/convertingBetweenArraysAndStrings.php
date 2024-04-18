<?php

$string = 'Learning PHP with a cup of coffee';

$array = str_split($string);

print_r($array);

$string = join('', $array);

echo $string;

$words = explode(' ', $string);

print_r($words);
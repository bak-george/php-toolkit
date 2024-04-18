<?php 

$greet = function($name) {
    echo 'Hello, ' . $name . PHP_EOL;
};

$greet('World');

$someValue = 11;

$bar = function() use ($someValue) {
    echo $someValue;
};

$foo = function($someValue) {
    echo $someValue;
};

$bar(); 
echo PHP_EOL;
$foo($someValue);
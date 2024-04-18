<?php 

$books = [
    'Harry Potter and the Philosopher\'s Stone',
    'To Kill a Mockingbird',
    'The Great Gatsby',
    '1984',
    'Extraordinary Moments of an Ordinary Life',
    'The Hobbit',
    'The Lord of the Rings'
];

array_splice($books, 0, 1);

var_dump($books);
echo PHP_EOL . 'after 2nd splice' . PHP_EOL;
array_splice($books, 4, 1);
var_dump($books);
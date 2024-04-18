<?php

$library = [
    'George Orwell' => '1984',
    'Robert Greene' => 'Mastery',
    'George Bakoulis' => 'Extraordinary Moments of an Ordinary Life',
    'J.R.R. Tolkien' => ['The Lord of the Rings', 'The Two Towers'],
    'David Sklar' => 'PHPCookbook'
];

foreach ($library as $author => $books) {
    if (is_array($books)) {
        $booksString = implode(', ', $books);
        echo "{$author} => {$booksString}" . PHP_EOL;
    } else {
        echo "{$author} => {$books}" . PHP_EOL;
    }
}

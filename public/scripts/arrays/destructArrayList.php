<?php

$userData = [
    "Harry Potter",
    "18",
    "harry@hogwarts.com",
    "Hogwarts"
];

list($name, $age, $email, $location) = $userData;

echo "Name: {$name} " . PHP_EOL 
   . "Age: {$age} "   . PHP_EOL
   . "Email: $email"  . PHP_EOL
   . "Location: $location";


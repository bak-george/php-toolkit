<?php

$array = range(1, 10);

$standard = array_splice($array, 1, 3);

var_dump($standard);
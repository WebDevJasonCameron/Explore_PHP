<?php

// Arrow Functions (one line functions)
/*
function add($a, $b) {
    return $a + $b;
}
*/

$add = fn ($a, $b) => $a + $b;

/*
echo add(2, 3) . '<br />';
*/

echo $add(1, 2);

$numbers = [1,2,3,4,5];

/*
$squareNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

print_r($squareNumbers);
*/

$squareNumbers = array_map(fn ($number) => $number * $number, $numbers);

print_r($squareNumbers);

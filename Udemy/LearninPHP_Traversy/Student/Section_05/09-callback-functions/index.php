<?php

// Callback function
$numbers = [1, 2, 3, 4, 5];

$square =  function ($number) {
    return $number * $number;
};

$squareNumbers = array_map($square, $numbers);

//print_r($squareNumbers);

function applyCallback($callback, $value) {
    return $callback($value);
}

$double = function ($number) {
    return $number * 2;
};

// BELOW will not work... needs to be set up as a var holding a Lambda function
//function triple($number) {
//    return $number * 3;
//}

$result_01 = applyCallback($double, 5);
//$result_02 = applyCallback(triple(2), 2);

echo $result_01 . '<br />';
//echo $result_02 . '<br />';
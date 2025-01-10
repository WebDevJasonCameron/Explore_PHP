<?php

$names = array('John', 'Jack', 'Jill');
$names = ['John', 'Jack', 'Jill'];
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//inspect($names);
//inspect($numbers);

//print_r($names);
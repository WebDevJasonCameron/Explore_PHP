<?php

// String
$name = 'Jason Cameron';
$name2 = 'Calvin Cameron';

var_dump($name);
echo '<br />';

// Integer
$age = 35;
var_dump($age);

echo '<br />';

// Float
$rating = 4.6;
var_dump($rating);
echo '<br />';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br />';

// Array
$friends = ['Jason Cameron', 'Calvin Cameron'];
var_dump($friends);
echo '<br />';

// Object
$person = new stdClass();
var_dump($person);
echo '<br />';

// Null
$car = null;
var_dump($car);
echo '<br />';

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br />';
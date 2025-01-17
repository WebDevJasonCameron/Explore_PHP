<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// My work...
$fahrenheit = 35;

/*
function fahrenheitToCelsius ($fahrenheit): string {
    return ($fahrenheit - 32) * (5/9) . '&deg; C.<br />';
}

echo fahrenheitToCelsius ($fahrenheit);
*/

// Anon Function
/*
$fahrenheitToCelsius = function($fahrenheit) {
    return ($fahrenheit - 32) * (5/9) . '&deg; C.<br />';
};
*/

// Arrow
/*
$fahrenheitToCelsius = fn ($fahrenheit) => ($fahrenheit - 32) * (5/9) . '&deg; C.<br />';
*/

// Using Closure
$baseTemp = 32;

$fahrenheitToCelsius = function($fahrenheit) use ($baseTemp) {
    return ($fahrenheit - $baseTemp) * 5/9;
};

echo $fahrenheit . '&deg;F = ' . $fahrenheitToCelsius($fahrenheit) . '&deg;C<br />'; ;

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument.
  The function should loop through the array and print each name to the screen in uppercase letters.
*/

$names = ["Jason", "Calvin", "Mocha", "Smash"];

// My Work
function printNamesToUpperCase (array $names){
    foreach ($names as $name) {
        echo strtoupper($name) . '<br />';
    }
}

printNamesToUpperCase($names);


echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord ($sentence){
    echo $sentence . '<br />';

    $sentenceExploded = explode(" ", $sentence);
    $longestWord = $sentenceExploded[0];
    foreach($sentenceExploded as $word){
        if (strlen(trim($word)) > strlen(trim($longestWord))){
            $longestWord = $word;
        }
    }
    echo 'The longest word in this sentence is: ' . $longestWord . ' at a length of ' . strlen($longestWord) . ' letters<br />';
}

findLongestWord ('This is the longest word sentence to find that word.');
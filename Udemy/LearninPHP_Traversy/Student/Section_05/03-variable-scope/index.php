<?php

// Global scope
$name = 'Alice';

function sayHello()
{
    global $name;
    $name = 'John';                 // Will Change the Global when you call it within the function
    // Local scope
    echo 'Hello ' . $name;

}

sayHello();
echo '<br />';
echo $name;

$name = 'Smash';
echo '<br />';
echo $name;
echo '<br />';

function sayGoodbye(){
    $names = ['Jack', 'Jill'];
    echo "Good by $names[0] and $names[1] <br />";
}

sayGoodbye();

//echo $names[0];                       Scope is bad
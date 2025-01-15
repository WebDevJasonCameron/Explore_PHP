<?php

function add($a = 1, $b = 1) {
    return $a + $b;
}

echo add(1, 2);
echo '<br />';
echo add(100, 250);
echo '<br />';
echo add();
echo '<br />';

function sayHello($name = 'world'): string
{
    return 'Hello, '.$name;
}

echo sayHello();

echo '<br />';

function addAll(...$numbers): string
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total . '<br />';
}

echo addAll(3, 4, 5, 6);
echo addAll(3, 4, 5, 6);
echo addAll(3, 4, 5, 6);

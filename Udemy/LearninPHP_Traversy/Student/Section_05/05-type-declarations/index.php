<?php

declare(strict_types = 1);

function getSum(int $a, int $b) : int {
    return $a + $b;
}

echo getSum(1, 2) . "<br />";

function greeting(string $name) : string {
    return "Hello $name! <br />";
}

echo greeting("John Doe");
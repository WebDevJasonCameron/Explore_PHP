<?php


$score = 50;

if ($score > 40) {
    echo 'High Score';
} else {
    echo 'Low Score';
}

echo '<br>';

$result = $score > 40 ? 'High Score' : 'Low Score';

echo $result;
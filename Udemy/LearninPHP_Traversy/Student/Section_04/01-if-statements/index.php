<?php

$age = 10;

// If statement
/*
if ($age >= 21) {
    echo "you are old enough to drink in the US";
} else {
    echo "you are not old enough to drink in the US";
}
*/


// If-Else
/*
if ($age >= 21) {
    echo "you are old enough to drink and vote in the US";
} else {
    if ($age >= 18) {
        echo "you are old enough to vote in the US";
    }
    else {
        echo "you are NOT old enough to drink or vote in the US";
    }
}
*/


// Nested if statement

// If-Else-If
if ($age >= 21) {
    echo 'You are old enough to drink and vote in the US';
} else if ($age >= 18) {
    echo 'You are old enough to vote in the US';
} else {
    echo 'You are NOT old enough to drink or vote in the US';
}

<?php

//$favoriteColor = 'red';
//$color = isset($favoriteColor) ? $favoriteColor : 'blue';

//$color = $favoriteColor ?? 'blue';
$secondFavoriteColor = "black";

$color = isset($favoriteColor) ?$favoriteColor :
    (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

echo $color . '<br />';


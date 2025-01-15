<?php

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME;
echo '<br />';
echo APP_VERSION;

const DB_NAME = 'myDB';
const DB_HOST = 'localhost';

echo '<br />';
echo DB_NAME;
echo '<br />';
echo DB_HOST;
echo '<br /><br />';


function run(){
    echo APP_NAME;
    echo '<br />';
    echo APP_VERSION;
    echo '<br />';
    echo DB_NAME . ' ' . DB_NAME;
}

run();
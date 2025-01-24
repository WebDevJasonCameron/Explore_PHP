<?php
require '../helpers.php';

$routes = [
  '/' => 'controllers/home.php',
  '/listings' => 'controllers/listings/index.php',
  '/listings/create' => 'controllers/listings/create.php',
  '404' => 'controllers/404.php',
];

$uri = $_SERVER['REQUEST_URI'];

//loadView('home');

inspect($uri);
//inspectAndDie($routes);

if(array_key_exists($uri, $routes)) {
  require basePath($routes[$uri]);
} else {
  inspect('controllers/404.php');
  require basePath($routes['404']);
}
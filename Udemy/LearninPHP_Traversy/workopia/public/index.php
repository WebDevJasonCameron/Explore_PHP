<?php
require '../helpers.php';

$routes = [
  '/index.php' => 'controllers/home.php',
  '/listings' => 'controllers/listings/index.php',
  '/listings/create' => 'controllers/listings/create.php',
  '404' => 'controllers/404.php',
];

$basePath = '/workopia/public';

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$uri = str_replace($basePath, '', $uri);

// Test my git

//loadView('home');

inspect($uri);
//inspectAndDie($routes);

if(array_key_exists($uri, $routes)) {
  require basePath($routes[$uri]);
} else {
//  inspect('controllers/404.php');
  require basePath($routes['404']);
}
<?php
require '../helpers.php';

$routes = [
  '/' => 'controllers/home.php',
  '/listings' => 'workopia/controllers/listings/index.php',
  '/listings/create' => 'controllers/listings/create.php',
  '404' => 'controllers/404.php',
];

$basePath = '/workopia/public';

inspect($basePath);

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

inspect($uri);

$uri = str_replace($basePath, '', $uri);

$uri = str_replace('index.php', '', $uri);

inspect($uri);

if(array_key_exists($uri, $routes)) {
  require basePath($routes[$uri]);
} else {
  require basePath($routes['404']);
}
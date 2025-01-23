<?php

/**
 * Gets the Base path
 *
 * @param string $path
 * @return string
 */
function basePath($path = '') {
  return dirname(__DIR__) . '/workopia/' . $path;
}

/**
 * Load a view
 *
 * @param string $name
 * @return void
 */
function loadView($name) {
  require basePath("views/{$name}.view.php");
}

/**
 * Load a partial
 *
 * @param string $name
 * @return void
 */
function loadPartial($name) {
  require basePath("views/partials/{$name}.php");
}
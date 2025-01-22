<?php

/**
 * Gets the Base path
 *
 * @param string $path
 * @return string
 */
function basePath($path = '') {
  return dirname(__DIR__) . '/workopia' . $path;
}